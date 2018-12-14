@extends('layouts.user')

@section('head')

    <script type="text/javascript" src="{{ asset('js/calculators.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/calcs/calc2.js') }}"></script>

@endsection

@section('link') {{ route('manager.index') }} @endsection
@section('logo') <img src="{{ asset('img/users/logo-manager.png') }}" height="100%"> @endsection


@section('menu')

    @include('users.manager.layouts.menu')
    
@endsection

@section('content')

    @yield('content')

@endsection
