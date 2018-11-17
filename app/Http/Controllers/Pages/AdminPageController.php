<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminPageController extends Controller
{
    
    public function index()
    {
        return view('users.admin.index');
    }

}
