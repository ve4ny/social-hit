<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatusEnum;
use App\Models\Transaction;
use App\Models\User;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use YooKassa\Client;
use YooKassa\Common\Exceptions\ApiConnectionException;
use YooKassa\Common\Exceptions\ApiException;
use YooKassa\Common\Exceptions\AuthorizeException;
use YooKassa\Common\Exceptions\BadApiRequestException;
use YooKassa\Common\Exceptions\ExtensionNotFoundException;
use YooKassa\Common\Exceptions\ForbiddenException;
use YooKassa\Common\Exceptions\InternalServerError;
use YooKassa\Common\Exceptions\NotFoundException;
use YooKassa\Common\Exceptions\ResponseProcessingException;
use YooKassa\Common\Exceptions\TooManyRequestsException;
use YooKassa\Common\Exceptions\UnauthorizedException;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;

class FinancialController extends Controller
{
    public function index()
    {
        return view('pages.refill');
    }

    /**
     * @throws NotFoundException
     * @throws ResponseProcessingException
     * @throws ApiException
     * @throws ExtensionNotFoundException
     * @throws BadApiRequestException
     * @throws AuthorizeException
     * @throws InternalServerError
     * @throws ForbiddenException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     * @throws ApiConnectionException
     */
    public function create(Request $request, PaymentService $service)
    {
        $amount = (float)$request->input('amount');
        $description = 'Пополнение баланса';

        $transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            'amount' => $amount,
            'description' => $description
        ]);

        if($transaction) {
            $link = $service->createPayment($amount, $description, [
                'transaction_id' => $transaction->id
            ]);

            if($link) {
                $parsedUrl = parse_url($link);
                $query = $parsedUrl['query'];
                parse_str($query, $queryParams);
                $transaction->transaction_id = $queryParams['orderId'];
                $transaction->save();
            } else {
                $transaction->status = PaymentStatusEnum::FAILED;
                $transaction->save();
                return redirect()->back();
            }

            return redirect()->away($link);
        }
    }

    /**
     * @throws NotFoundException
     * @throws ResponseProcessingException
     * @throws ApiException
     * @throws ExtensionNotFoundException
     * @throws BadApiRequestException
     * @throws InternalServerError
     * @throws ForbiddenException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     */
    public function callback(Request $request, PaymentService $service)
    {
        $source = file_get_contents('php://input');
        Log::info($source);
        $requestBody = json_decode($source, true);

        $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
            ? new NotificationSucceeded($requestBody)
            : new NotificationWaitingForCapture($requestBody);

        $payment = $notification->getObject();

        if(isset($payment->status) && $payment->status === 'waiting_for_capture') {
            $service->getClient()->capturePayment([
                'amount' => $payment->amount,
            ], $payment->id, uniqid('', true));
            $metadata = (object)$payment->metadata;
            $payment_method = (object)$payment->payment_method;
            if(isset($metadata->transaction_id) && isset($payment_method->title)) {
                $transactionId = (int)$metadata->transaction_id;
                $transaction = Transaction::find($transactionId);
                $transaction->status = PaymentStatusEnum::WAITING_FOR_CAPTURE;
                $transaction->payment_method = $payment_method->title;
                $transaction->save();
            }
        }

        if(isset($payment->status) && $payment->status === 'succeeded') {
            if((bool)$payment->paid === true) {
                $metadata = (object)$payment->metadata;
                if(isset($metadata->transaction_id)) {
                    $transactionId = (int)$metadata->transaction_id;
                    $transaction = Transaction::find($transactionId);
                    $transaction->status = PaymentStatusEnum::SUCCEEDED;
                    $transaction->save();

                    $user = User::with('balance')->where('id', $transaction->user_id)->first();
                    $user->balance->amount = (float)$user->balance->amount + (float)$payment->amount->value;
                    $user->balance->save();
                }
            }
        }

        if(isset($payment->status) && $payment->status === 'canceled') {
            $metadata = (object)$payment->metadata;
            if(isset($metadata->transaction_id)) {
                $transactionId = (int)$metadata->transaction_id;
                $transaction = Transaction::find($transactionId);
                $transaction->status = PaymentStatusEnum::CANCELED;
                $transaction->save();
            }
        }
    }
}
