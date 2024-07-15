<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class OrderController extends Controller
{
    protected int $minutes = 60;

    public function order(Request $request): View
    {
        $menu = Social::with(['attachment', 'categories' => function ($query) {
            $query->where('show', 1)->with('attachment');
        }])->get();
        foreach($menu as $m) {
            $m->picture = $m->image;
            foreach($m->categories as $cat) {
                $cat->picture = $cat->image;
            }
        }
        $category = Category::find($request->categoryId);
        return view('pages.order', compact('menu', 'category'));
    }

    public function makeRedirect(int $categoryId)
    {
        return redirect()->route('order', ['categoryId' => $categoryId]);
    }

    public function getServices(int $categoryId)
    {
        $services = Service::where('category_id', $categoryId)->get();
        return response()->json(['services' => $services]);
    }
    /**
     * @return View
     */
    public function ordersHistory(): View
    {
        return view('pages.orders');
    }
}
