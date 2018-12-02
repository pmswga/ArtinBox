@extends('users.master.layouts.app')
@section('title') Панель администратора @endsection
@section('caption') Архив @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui green segment">
                    <legend><h3>Архив выполненных заявок</h3></legend>
                    
                    @include('orders.table_archive')
                    
                </fieldset>
            </div>
        </div>
    </div>

@endsection

