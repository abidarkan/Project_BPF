<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('AdminMiddleware executed for user: ', ['user' => Auth::user()]);

        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Unauthorized access.');
    }
}
