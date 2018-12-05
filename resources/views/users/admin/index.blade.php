@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection
@section('caption') Все заявки @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                @include('orders.table_admin')
            </div>
        </div>
    </div>
   
@endsection

