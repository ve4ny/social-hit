<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }
}
