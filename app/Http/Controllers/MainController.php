<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $socials = Social::with('attachment')
            ->with('categories', function ($query) {
                $query->where('main_show', 1);
            })->get();
        return view('index', compact('socials'));
    }
}
