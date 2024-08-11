<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Check if the authenticated user has the 'admin' role
        if (Auth::user()->role !== 'author') {
            return redirect()->route('home')->with('unauthorised', 'You are unauthorised to access this page.');
        }

        // Allow request
        return $next($request);
    }
}
