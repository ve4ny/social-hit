<?php

namespace App\Http\Middleware;

use App\Models\Contact;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ShareUserWithViews
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $contacts = Contact::first();
        if(auth()->check()){
            $user = Auth::user()->load(['details', 'balance']);
            view()->share(['user' => $user, 'contacts' => $contacts]);
        } else {
            view()->share(['user' => null, 'contacts' => $contacts]);
        }
        return $next($request);
    }
}
