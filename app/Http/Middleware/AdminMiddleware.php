<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
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
        if(Auth::guard('admin')->user()){
            if(!Auth::guard('admin')->user()->role == "1"){
                return redirect()->route('login_form')->with('error','Plz login First');
            }
        }else if(Auth::guard('web')->user()){
            abort(404);
        }else{
            abort(404);
        }

        // if (auth()->user()->type == 'admin') {
        //     return $next($request);
        // }
        // else{
        //     abort(404);
        // }
        return $next($request);
    }
}
