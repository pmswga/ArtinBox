@extends('layouts.user')

@section('menu')

    @include('users.master.layouts.menu')
    
@endsection


@section('link') {{ route('manager.index') }} @endsection
@section('logo') <img src="{{ asset('img/users/logo-master.png') }}" height="100%"> @endsection

@section('content')

    @yield('content')

@endsection
