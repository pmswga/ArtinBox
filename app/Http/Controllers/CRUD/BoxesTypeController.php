<?php

namespace App\Http\Controllers\CRUD;

use App\Models\BoxesType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoxesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.admin.types.boxes.index', [
            'boxesTypes' => BoxesType::get()
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
     * @param  \App\Models\BoxesType  $boxesType
     * @return \Illuminate\Http\Response
     */
    public function show(BoxesType $boxesType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BoxesType  $boxesType
     * @return \Illuminate\Http\Response
     */
    public function edit(BoxesType $boxesType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BoxesType  $boxesType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoxesType $boxesType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoxesType  $boxesType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoxesType $boxesType)
    {
        //
    }
}
