@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection
@section('caption') В производстве @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui orange segment">
                    <legend><h3>Заявки в производстве</h3></legend>
                    @include('orders.table_user')
                </fieldset>
            </div>
        </div>
    </div>

@endsection

