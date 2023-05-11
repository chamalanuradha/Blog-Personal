<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next){
        if (auth()->user()){
            if (auth()->user()->IsAdmin()){
                return $next($request);
            }else{
                return back()->with('status', 'You are not allowed to access this page');
            }
        } else{
            return back();
             }


    }
}
