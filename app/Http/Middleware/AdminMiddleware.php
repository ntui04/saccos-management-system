<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        return $next($request);

        // if (auth()->check() && auth()->user()->isAdmin()) { // Assuming 'isAdmin' is a method on your User model
        //     return $next($request);
        // }
        // return redirect('/');
    }
}
