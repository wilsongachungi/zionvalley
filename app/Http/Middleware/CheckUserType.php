<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
	public function handle(Request $request, Closure $next)
    {
        // Check the user's type
        if (auth()->check() && auth()->user()->usertype != '1') {
            // Redirect or deny access if the user is not an admin
            return redirect()->route('index'); // Redirect to a different route if not authorized
        }

        return $next($request); // Proceed with the request if authorized
    }
}
