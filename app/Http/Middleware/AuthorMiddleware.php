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

        // Check if the authenticated user has the 'author' role
        if (!Auth::check() && Auth::user()->role !== 'author') {
            return redirect()->route('admin.posts.index')->with('error', 'You do not have permission to update this post.');
        }

        // Allow request
        return $next($request);
    }
}
