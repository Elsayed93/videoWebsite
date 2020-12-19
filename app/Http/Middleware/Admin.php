<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        // dd(auth()->user());
        if (auth()->guest()) {
            return redirect('/login');
        }
        if (auth()->user()->group != 'admin') {
            return redirect('/');
        }

        return $next($request);
    }
}
