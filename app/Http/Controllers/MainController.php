<?php

namespace App\Http\Controllers;

use App\Models\AdditionalPage;
use App\Models\Block;
use App\Models\Brand;
use App\Models\Faq;
use App\Models\Page;
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
        $faqs = Faq::where('social_id', null)->where('publish', true)->get();
        $brands = Brand::with('attachment')->get();
        $blocksUnsort = Block::all();
        $blocks = [];
        foreach($blocksUnsort as $block) {
            $blocks[$block->ident] = $block;
            $blocks[$block->ident]['image'] = $block->image;
        }
        return view('index', compact('faqs', 'brands', 'blocks'));
    }

    public function help(string $socialName = null): View
    {
        $socialId = null;
        if($socialName) {
            $socialId = Social::where('name', $socialName)->pluck('id')->first();
        }
        $faqs = Faq::where('social_id', $socialId)->where('publish', true)->get();
        return view('pages.help', compact('socialName', 'faqs'));
    }

    public function contacts(): View
    {
        return view('pages.contacts');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\View\View|RedirectResponse
     */
    public function otherPages(string $slug): View|RedirectResponse
    {
        $page = AdditionalPage::where('slug', $slug)->first();
        if (!$page) {
            return redirect()->route('404');
        }
        return view('pages.other-pages', compact('page'));
    }
}
