<?php

namespace App\Http\Middleware;

use App\Http\classes\WEB\UserAuth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {


        if (!session()->has('userId') )
        {
        // The user is logged in...
            return redirect()->route('login');
        }
        return $next($request);
    }
}
