<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index()
    {
        return view('pages.referral');
    }
}
