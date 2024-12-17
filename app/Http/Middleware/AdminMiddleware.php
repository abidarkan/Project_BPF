<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
{
    \Log::info('AdminMiddleware executed for user: ' . optional(Auth::user())->email);

    if (Auth::check() && Auth::user()->role === 'admin') {
        return $next($request);
    }

    return redirect('/')->with('error', 'Unauthorized.');
}

}
