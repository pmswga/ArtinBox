<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
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
                return route('master.index');
            } break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
