<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 2) {
                return $next($request);
            }
        }

        // If not authenticated or not a seller, redirect to login
        return redirect('/login');
    }
}
