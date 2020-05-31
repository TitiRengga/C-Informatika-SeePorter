<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;
class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('porter') || $request->is('porter/*')) {
            return redirect()->guest('/login/porter');
        }
        if ($request->is('pengguna') || $request->is('pengguna/*')) {
            return redirect()->guest('/login/pengguna');
        }
        return redirect()->guest(route('login'));
    }
}