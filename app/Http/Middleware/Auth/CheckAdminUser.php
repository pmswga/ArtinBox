<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdminUser
{
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->id_user_type != 1) {
            return redirect()->back();
        }

        return $next($request);
    }
}
