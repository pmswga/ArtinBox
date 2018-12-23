@extends('users.manager.layouts.app')
@section('title') Архив @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                @include('orders.table_archive')
            </div>
        </div>
    </div>

@endsection

