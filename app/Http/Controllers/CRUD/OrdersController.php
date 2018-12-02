<?php

namespace App\Http\Controllers\CRUD;

use App\Models\Order;
use App\Models\ProductionSteps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->id_master = Auth::user()->id_user;
        $order->id_order_status = 2;
        $order->id_production_step = ProductionSteps::where('id_box_type', $order->id_box_type)->first()['id_production_step'];
        $order->start_date = date("Y-m-d H:i:s");
        
        $order->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
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
        
        return back();
    }



}
