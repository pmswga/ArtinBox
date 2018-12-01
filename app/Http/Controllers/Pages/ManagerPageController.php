<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\BoxesType;
use App\Models\MaterialsType;
use App\Models\Order;

class ManagerPageController extends Controller
{
    
    public function index()
    {
        return view('users.manager.index', [
            'boxesTypes' => BoxesType::get(),
            'materialsTypes' => MaterialsType::get()->first(),
            'orders' => Order::where('id_author', Auth::user()->id_user)->get(),
        ]);
    }

    public function processes()
    {
        $whereClause = [
            ['id_author', '=', Auth::user()->id_user],
            ['id_order_status', '=', 2],
        ];

        return view('users.manager.orders.processes', [
            'orders' => Order::where($whereClause)->get(),
        ]);
    }

    public function production()
    {
        $whereClause = [
            ['id_author', '=', Auth::user()->id_user],
            ['id_order_status', '=', 1],
        ];

        return view('users.manager.orders.production', [
            'orders' => Order::where($whereClause)->get(),
        ]);
    }

    public function archive()
    {
        $whereClause = [
            ['id_author', '=', Auth::user()->id_user],
            ['id_order_status', '=', 1],
        ];

        return view('users.manager.orders.archive', [
            'orders' => Order::where($whereClause)->get(),
        ]);
        
    }

    
    public function create()
    {
        return view('users.admin.orders.create', [
            'boxesTypes' => BoxesType::get(),
            'materialsTypes' => MaterialsType::get()->first(),
            'orders' => Order::where('id_author', Auth::user()->id_user)->get(),
        ]);
    }

}
