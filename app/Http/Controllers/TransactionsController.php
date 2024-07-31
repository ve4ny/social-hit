<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatusRusEnum;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    private array $status = [
        'created' => 'Создана',
        'pending' => 'В процессе',
        'waiting_for_capture' => 'В процессе',
        'succeeded' => 'Выполнена',
        'canceled' => 'Отменена',
        'failed' => 'Ошибка'
        ];

    private array $methods = [
        'bank_card' => 'Карта'
    ];

    public function index(Request $request)
    {
        $perPage = isset($request->perPage) ? $request->perPage : 10;
        $transactions = Transaction::where('user_id', auth()->user()->id)->orderByDesc('created_at')->paginate($perPage);
        foreach($transactions as $transaction) {
            $transaction->status_rus = $this->status[$transaction->status];
            $transaction->date = Carbon::parse($transaction->created_at)->format('d.m.Y');
            $transaction->time = Carbon::parse($transaction->created_at)->format('H:i');
            $transaction->method = 'Карта';
        }
        return view('pages.transactions', compact('transactions'));
    }
}
