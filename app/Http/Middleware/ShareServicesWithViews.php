<?php

namespace App\Http\Middleware;

use App\Models\Social;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ShareServicesWithViews
{
    private int $minutes = 120;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $socials = Social::with(['attachment', 'categories' => function ($query) {
                $query->where('main_show', 1)->with('attachment');
            }])->get();

        view()->share('socials', $socials);

        return $next($request);
    }
}
