<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Request;
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
        dd($request);
//        if (auth::guard('auth:admin')->attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')]))
//        {
//
//        }
    }
}
