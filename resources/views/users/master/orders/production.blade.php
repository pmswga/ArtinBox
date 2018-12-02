@extends('users.master.layouts.app')
@section('title') Мои заявки @endsection
@section('caption') В производстве @endsection

@section('content')


    <fieldset class="ui green segment">
        <legend><h3>В производстве</h3></legend>
        @include('orders.table_master')
    </fieldset>

@endsection

