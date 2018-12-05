@extends('layouts.user')

@section('head')

    <script type="text/javascript" src="{{ asset('js/calculators.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/calcs/calc2.js') }}"></script>

@endsection

@section('link') {{ route('admin.index') }} @endsection

@section('menu')

    @include('users.admin.layouts.menu')
    
@endsection

@section('content')

    @yield('content')

@endsection
