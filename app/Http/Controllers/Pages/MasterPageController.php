<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class MasterPageController extends Controller
{
    
    public function index()
    {
        return view('users.master.index', [
            'orders' => Order::where('id_order_status', 1)->get()
        ]);
    }

}
