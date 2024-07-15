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
        $similar = $this->getSimilar($category);
        return view('pages.order', compact('menu', 'category', 'similar'));
    }

    public function makeRedirect(int $categoryId)
    {
        return redirect()->route('order', compact('categoryId'));
    }

    public function getServices(int $categoryId)
    {
        $services = Service::where('category_id', $categoryId)->get();
        $category = Category::find($categoryId);
        $similar = $this->getSimilar($category);
        return response()->json(['services' => $services, 'similar' => $similar]);
    }
    /**
     * @return View
     */
    public function ordersHistory(): View
    {
        return view('pages.orders');
    }

    protected function getSimilar($category)
    {
        $unsortedSimilar = $category->similar();
        foreach ($unsortedSimilar as $s) {
            $s->price = $s->services->min('rate');
        }
        return $unsortedSimilar->sortBy('price')->take(5);
    }
}
