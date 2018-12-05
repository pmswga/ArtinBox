@extends('users.manager.layouts.app')
@section('title') Панель администратора @endsection
@section('caption') Создать новый заказ @endsection

@section('content')

    <div class="ui internally celled stackable grid">
        <div class="row">
            <div class="sixteen wide column">
                <div class="ui top attached tabular menu">
                    <a class="active item" data-tab="box_type_2">Живописный</a>
                    <a class="item" data-tab="box_type_1">Стандартный (крышка сверху)</a>
                </div>
                <div class="ui bottom attached tab segment" data-tab="box_type_1">
                    @include('orders.calcs.standart')
                </div>
                <div class="ui bottom attached active tab segment" data-tab="box_type_2">
                    @include('orders.calcs.pictured')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('.menu .item').tab();

    </script>

@endsection