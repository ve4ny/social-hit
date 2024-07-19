<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YooKassa\Client;

class FinancialController extends Controller
{
    public function showRefill()
    {
        $client = new Client();
        return view('pages.refill');
    }
}
