@extends('users.admin.layouts.app')
@section('title') В производстве @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                @include('orders.table_admin')
            </div>
        </div>
    </div>
   
@endsection

