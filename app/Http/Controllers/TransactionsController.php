<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = isset($request->perPage) ? $request->perPage : 10;
        $transactions = Transaction::where('user_id', auth()->user()->id)->orderByDesc('created_at')->paginate($perPage);
        return view('pages.transactions', compact('transactions'));
    }
}
