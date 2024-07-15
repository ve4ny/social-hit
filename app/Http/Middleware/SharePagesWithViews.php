<?php

namespace App\Http\Middleware;

use App\Models\AdditionalPage;
use Closure;
use Illuminate\Http\Request;

class SharePagesWithViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $pages = AdditionalPage::pluck('slug', 'title');
        view()->share('pages', $pages);
        return $next($request);
    }
}
