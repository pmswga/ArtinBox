<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\BoxesType;
use App\Models\Order;

class AdminPageController extends Controller
{
    
    public function index()
    {
        return view('users.admin.index', [
            'boxesTypes' => BoxesType::get(),
            'orders' => Order::where('id_author', Auth::user()->id_user)->get(),
        ]);
    }

    public function production()
    {
        $whereClause = [
            ['id_author', '=', Auth::user()->id_user],
            ['id_order_status', '=', 1],
        ];

        return view('users.admin.orders.production', [
            'orders' => Order::where($whereClause)->get(),
        ]);
    }

    public function processes()
    {
        $whereClause = [
            ['id_author', '=', Auth::user()->id_user],
            ['id_order_status', '=', 2],
        ];

        return view('users.admin.orders.processes', [
            'orders' => Order::where($whereClause)->get(),
        ]);
    }

    public function archive()
    {
        $whereClause = [
            ['id_author', '=', Auth::user()->id_user],
            ['id_order_status', '=', 3],
        ];

        return view('users.admin.orders.archive', [
            'orders' => Order::where($whereClause)->get(),
        ]);
    }

}
