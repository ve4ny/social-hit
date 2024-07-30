<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->orderByDesc('created_at')->get();
        return view('pages.transactions', compact('transactions'));
    }
}
