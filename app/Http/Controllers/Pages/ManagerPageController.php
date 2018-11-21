<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\BoxesType;
use App\Models\Order;

class ManagerPageController extends Controller
{
    public function index()
    {
        return view('users.manager.index', [
            'boxesTypes' => BoxesType::get(),
            'orders' => Order::where('id_author', Auth::user()->id_user)->get(),
        ]);
    }

    public function processes()
    {
        return view('users.manager.orders.processes', [
            'orders' => Order::where('id_author', Auth::user()->id_user)->get(),
        ]);
    }
}
