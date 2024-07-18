<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Promo;
use App\Models\Service;
use App\Models\Social;
use App\Services\JapApi;
use Illuminate\Http\JsonResponse;
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
        $category = Category::find($request->category);
        $social = Social::with('attachment')->where('id', $category->social_id)->first();
        $social->picture = $social->image;
        $similar = $category->similar();
        return view('pages.order', compact('menu', 'social', 'category', 'similar'));
    }

    public function makeRedirect(int $categoryId)
    {
        return redirect()->route('order', compact('categoryId'));
    }

    public function getServices(int $categoryId)
    {
        $services = Service::with('advantage')->where('category_id', $categoryId)->get();
        foreach($services as $service) {
            $service->rate = round($service->rate, 2);
        }
        $category = Category::find($categoryId);
        $similar = $category->similar();
        return response()->json(['services' => $services, 'similar' => $similar]);
    }

    public function checkPromo(Request $request)
    {
        $code = Promo::where('code', $request->code)->first();
        if($code) {
            return response()->json(['discount' => (100 - $code->coefficient) / 100 ]);
        }
        return response()->json(['promo' => 'Такого промокода не существует'], 400);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function makeOrder(OrderRequest $request): JsonResponse
    {
        $user = auth()->user();
        $service = $request->service;
        $order = new Order();
        $order->fill([
            'jap_id' => 0,
            'user_id' => $user->id,
            'service_id' => $service['id'],
            'quantity' => $request->quantity,
            'sum' => $service['rate'] * $request->quantity - ($service['rate'] * $request->quantity * $request->discount),
            'link' => $request->link,
            'start_count' => null,
            'remains' => $request->quantity,
            'status' => 'Pending',
            'pay_status' => 'unpaid'
        ]);
        $order->save();
        return response()->json();
    }

    /**
     * @return View
     */
    public function ordersHistory(Request $request): View
    {
        $orders = Order::with('service')->where('user_id', auth()->user()->id)->orderByDesc('created_at')->paginate($request->perPage ?? 10);
        $api = new JapApi();
        foreach($orders as $order) {
            $order->sum = round($order->sum , 2);
            $order->date = $order->created_at->format('d.m.Y');
            $order->time = $order->created_at->format('H:i');
//            if($order->status !== 'Completed') {
//                $res = $api->status($order->jap_id);
//                if(!isset($res->error) || !$res->error) {
//                    $order->status = $res->status;
//                    $order->save();
//                }
//
//            }
        }
        return view('pages.orders', compact('orders'));
    }
}
