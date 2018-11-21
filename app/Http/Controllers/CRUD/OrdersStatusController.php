<?php

namespace App\Http\Controllers\CRUD;

use App\Models\OrdersStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersStatusController extends Controller
{

    public function index()
    {
        return view('users.admin.types.orders.index',[
            'ordersStatus' => OrdersStatus::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdersStatus  $ordersStatus
     * @return \Illuminate\Http\Response
     */
    public function show(OrdersStatus $ordersStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdersStatus  $ordersStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdersStatus $ordersStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdersStatus  $ordersStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdersStatus $ordersStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdersStatus  $ordersStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdersStatus $ordersStatus)
    {
        //
    }
}
