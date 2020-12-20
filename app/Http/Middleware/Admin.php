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
<<<<<<< HEAD
        if(auth()->user()->group != 'admin'){
=======
        if (auth()->user()->group != 'admin') {
>>>>>>> 8418bc6fb42d649ebe923ebff89b9218ef7448e4
            return redirect('/');
        }

        return $next($request);
    }
}
