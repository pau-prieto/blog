<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If user authenticated and role is Admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            // Allow request
            return $next($request);
        }

        // User is not authorised
        return redirect()->route('home')->with('unauthorized', 'You are unauthorized to access this page.');
    }
}
