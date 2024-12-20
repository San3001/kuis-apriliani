<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Gunakan Auth::check() untuk memeriksa login
        if (!Auth::check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
