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
        TopUp::dispatch($user, $amount);
        return redirect('/');
    }
}
