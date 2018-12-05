<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function test(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
    }

    protected function redirectTo()
    {
        if (\Auth::check()) {
            switch (\Auth::user()->id_user_type) 
            {
                case 1:
                {
                    return route('admin.index');
                } break;
                case 2:
                {
                    return route('manager.index');
                } break;
                case 3:
                {
                    return route('master.production');
                } break;
            }
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
