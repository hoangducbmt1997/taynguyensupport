<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckLogoutUser
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
       if(Auth::guest()){
            return $next($request);
        }else if(Auth::check()){
            $roles =Auth()->user()->roles;
            if($roles!=0){
              Auth::logout();
               return redirect()->route('home-pages');
            }
        }
        return redirect()->route('page');
    }
}
