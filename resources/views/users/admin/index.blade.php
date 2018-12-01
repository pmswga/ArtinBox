@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection
@section('caption') Все заявки @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui orange segment">
                    <legend><h3>Все заявки</h3></legend>
                    @include('orders.table_all')
                </fieldset>
            </div>
        </div>
    </div>
   
@endsection

