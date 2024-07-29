<?php

namespace App\Http\Controllers;

use App\Events\TopUp;
use App\Models\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function topUp()
    {
        $user = User::find(auth()->user()->id);
        $amount = 100;

//        $paymentData = [
//            'return_url' => 'https://yourapp.com/payment-success',
//            'description' => 'Order #12345',
//        ];
//        $response = $user->charge($amount, 'RUB', $paymentData);

        TopUp::dispatch($user, $amount);
        return redirect('/');
    }
}
