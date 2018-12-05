@extends('users.master.layouts.app')
@section('title') В производстве @endsection

@section('content')

    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui segment">
                    <legend><h4>В производстве</h4></legend>
                    @if (count($orders) > 0)
                        @include('orders.table_master')
                    @else
                        <h2>Заявок нет</h2>
                    @endif
                </fieldset>
            
           
                <fieldset class="ui segment">
                    <legend><h4>Мои заявки на выполнении</h4></legend>
                    
                    @if (count($orders_master) > 0)
                        @include('orders.table_master_production')
                    @else
                        <h2>Заявок нет</h2>
                    @endif
                </fieldset>
                
            </div>
        </div>
    </div>

@endsection