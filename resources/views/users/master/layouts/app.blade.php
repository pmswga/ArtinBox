@extends('layouts.user')

@section('menu')

    @include('users.master.layouts.menu')
    
@endsection

@section('content')

    @yield('content')

@endsection
