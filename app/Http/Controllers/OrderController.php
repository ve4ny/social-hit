<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Http\Requests\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Promo;
use App\Models\Service;
use App\Models\Social;
use App\Services\JapApi;
use Carbon\Carbon;
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
        if($request->service) {
            $service = Service::find($request->service);
        } else $service = Service::where('category_id', $category->id)->first();
        $social = Social::with('attachment')->where('id', $category->social_id)->first();
        $social->picture = $social->image;
        $similar = $category->similar();
        return view('pages.order', compact('menu', 'social', 'category', 'service', 'similar'));
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
        $code = Promo::where('code', $request->code)->where('expires', '>', Carbon::now())->first();
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
        $promo = Promo::where('code', $request->promocode)->where('expires', '>', Carbon::now())->first();
        $discount = $promo && $promo->coefficient ? (100 - $promo->coefficient) / 100 : 1;
        $order = new Order();
        $order->fill([
            'jap_id' => 0,
            'user_id' => $user->id,
            'service_id' => $service['id'],
            'quantity' => $request->quantity,
            'sum' =>$service['rate'] * $request->quantity * $discount,
            'link' => $request->link,
            'start_count' => null,
            'remains' => $request->quantity,
            'status' => 'Pending',
            'pay_status' => 'unpaid'
        ]);
        $order->save();
        //OrderCreated::dispatch($order);
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
        }
        return view('pages.orders', compact('orders'));
    }

    public function ordersCheck(Request $request)
    {
        $orders = Order::whereNot('status', 'Completed')->whereIn('jap_id', $request->ids)->get();
        $api = new JapApi();
        $res = $api->multiStatus($request->ids);
        foreach($res as $key => $data) {
            $order = $orders->firstWhere('jap_id', $key);
            if($order) {
                $order->status = $data->status;
                $order->start_count = $data->start_count;
                $order->remains = $data->remains;
                $order->save();
            }
        }
        return response()->json($res);
    }
}
