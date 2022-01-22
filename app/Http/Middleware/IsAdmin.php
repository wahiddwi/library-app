<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //untuk mengecek apakah admin
        if (Auth::check() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->roles == 'STUDENT') {
            # code...
            return redirect('/student');
        } else {
            # code...
            return redirect('/');
        }
    }
}
