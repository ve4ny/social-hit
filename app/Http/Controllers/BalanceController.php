<?php

namespace App\Http\Controllers;

use App\Events\TopUp;
use App\Models\User;
use Illuminate\Http\Request;
use YooKassa\Client;

class BalanceController extends Controller
{
    public function topUp()
    {

//        $paymentData = [
//            'return_url' => 'https://yourapp.com/payment-success',
//            'description' => 'Order #12345',
//        ];
//        $response = $user->charge($amount, 'RUB', $paymentData);

//        TopUp::dispatch($user, $amount);
        return view('pages.refill');
    }
}
