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
        $whereClause = [
            ['id_order_status', '=', 1],
        ];

        return view('users.master.index', [
            'orders' => Order::where($whereClause)->whereNull('id_master')->get(),
            'orders_master' => Order::where([
                ['id_order_status', '=', 2],
                ['id_master', '=', Auth::user()->id_user]
            ])->get(),
            'count_orders' => Order::where($whereClause)->whereNull('id_master')->count()
        ]);
    }
    
    public function archive()
    {
        $whereClause = [
            ['id_order_status', '=', 3],
        ];

        return view('users.master.orders.archive', [
            'orders' => Order::where($whereClause)->get(),
            'count_orders' => Order::where('id_order_status', 1)->whereNull('id_master')->count()
        ]);
    }

    public function order(Order $order)
    {
        return view('users.master.orders.order', [
            'order' => $order
        ]);
    }

    public function step(Order $order)
    {
        return view('users.master.orders.step', [
            'order' => $order
        ]);
    }

}
