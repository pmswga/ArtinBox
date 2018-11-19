<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkManagerUser
{
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->id_user_type != 2) {
            return back();
        }

        return $next($request);
    }
}
