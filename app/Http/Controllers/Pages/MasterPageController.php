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

    public function production()
    {
        $whereOrders = [
            ['id_order_status', '=', 2],
            ['id_master', '=', Auth::user()->id_user]
        ];

        return view('users.master.orders.production', [
            'orders' => Order::where($whereOrders)->get()
        ]);
    }
    
    public function archive()
    {
        $whereClause = [
            ['id_order_status', '=', 1],
        ];

        return view('users.master.orders.archive', [
            'orders' => Order::where($whereClause)->get(),
        ]);
    }

    public function order(Order $order)
    {
        return view('users.master.orders.order', [
            'order' => $order
        ]);
    }

}
