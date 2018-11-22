<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Order;

class MasterPageController extends Controller
{
    
    public function index()
    {
        $whereOrders = [
            ['id_order_status', '=', 1],
        ];

        return view('users.master.index', [
            'orders' => Order::where($whereOrders)->whereNull('id_master')->get()
        ]);
    }

    public function orders()
    {
        $whereOrders = [
            ['id_order_status', '=', 1],
            ['id_master', '=', Auth::user()->id_user]
        ];

        return view('users.master.orders', [
            'orders' => Order::where($whereOrders)->get()
        ]);
    }

}
