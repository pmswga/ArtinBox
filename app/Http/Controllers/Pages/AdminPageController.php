<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\BoxesType;
use App\Models\MaterialsType;
use App\Models\Order;

class AdminPageController extends Controller
{
    
    public function index()
    {
        return view('users.admin.index', [
            'boxesTypes' => BoxesType::get(),
            'materialsTypes' => MaterialsType::get()->first(),
            'orders' => Order::where('id_order_status', '=', 1)->get(),
            'count_orders' => Order::where('id_order_status', 1)->count()
        ]);
    }
    
    public function archiveIndex()
    {
        $whereClause = [
            ['id_order_status', '=', 3],
        ];

        return view('users.admin.orders.archive', [
            'orders' => Order::where($whereClause)->get(),
            'count_orders' => Order::where('id_order_status', 1)->count()
        ]);
    }

    public function archiveOrder(Order $order)
    {
        $whereClause = [
            ['id_order_status', '=', 3],
        ];

        return view('users.admin.orders.archiveOrder', [
            'order' => $order,
            'count_orders' => Order::where('id_order_status', 1)->count()
        ]);
    }
    
    public function create()
    {
        return view('users.admin.orders.create', [
            'boxesTypes' => BoxesType::get(),
            'materialsTypes' => MaterialsType::get()->first(),
            'orders' => Order::where('id_author', Auth::user()->id_user)->get(),
            'count_orders' => Order::where('id_order_status', 1)->count()
        ]);
    }

    
    public function order(Order $order)
    {
        return view('users.admin.orders.order', [
            'order' => $order,
            'count_orders' => Order::where('id_order_status', 1)->count()
        ]);
    }

}
