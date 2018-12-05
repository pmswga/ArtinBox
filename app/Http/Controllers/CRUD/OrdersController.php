<?php

namespace App\Http\Controllers\CRUD;

use App\Models\Order;
use App\Models\ProductionSteps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        Order::create([
            'id_box_type' => $request['box_type'],
            'sizes' => $request['sizes'],
            'create_date' => date('Y-m-d'),
            'id_author' => Auth::user()->id_user,
            'id_order_status' => 1
        ]);

        return back();
    }

    public function show(Order $order)
    {
        
    }
    
    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        $order->id_master = Auth::user()->id_user;
        $order->id_order_status = 2;
        $order->id_production_step = ProductionSteps::where('id_box_type', $order->id_box_type)->first()['id_production_step'];
        $order->start_date = date("Y-m-d H:i:s");
        
        $order->update();

        return back();
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return back();
    }

    public function nextStep(Order $order)
    {
        $order->id_production_step = $order->nextStep();
        $order->update();
        
        return back();
    }

    public function endStep(Order $order)
    {
        $order->id_order_status = 3;
        $order->finish_date = date("Y-m-d H:i:s");
        $order->update();
        
        return redirect()->route('master.archive');
    }



}
