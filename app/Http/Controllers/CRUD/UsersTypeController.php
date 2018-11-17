<?php

namespace App\Http\Controllers\CRUD;

use App\Models\UsersType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.admin.types.users.index', [
            'usersType' => UsersType::get() 
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
     * @param  \App\Models\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function show(UsersType $usersType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersType $usersType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersType $usersType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersType $usersType)
    {
        //
    }
}
