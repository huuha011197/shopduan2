<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->vai_tro == 1) {
            return redirect()->route('getadmin');
        } if (Auth::check() && Auth::user()->vai_tro == 0){
            return redirect()->route('trang-chu');
        } else {
            return $next($request);
        }

    }
}
