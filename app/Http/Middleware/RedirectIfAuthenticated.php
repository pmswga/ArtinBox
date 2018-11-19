<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (\Auth::guard($guard)->check()) {
        //     switch (\Auth::user()->id_user_type) 
        //     {
        //         case 1:
        //         {
        //             return route('admin.index');
        //         } break;
        //         case 2:
        //         {
        //             return route('manager.index');
        //         } break;
        //         case 3:
        //         {
        //             return route('master.index');
        //         } break;
        //     }
        // }

        return $next($request);
    }
}
