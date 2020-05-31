<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "porter" && Auth::guard($guard)->check()) {
            return redirect('/porter');
        }
        if ($guard == "pengguna" && Auth::guard($guard)->check()) {
            return redirect('/pengguna');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}