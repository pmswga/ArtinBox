@extends('layouts.app')

@section('content')

    <div class="ui grid">
        <div class="row">
            <div class="six wide column"></div>
            <div class="four wide column">
                <div class="ui vertical steps" style="width: 100%">
                    <div class="step">
                        <i class="user icon"></i>
                        <div class="content">
                            <div class="title"><a href="{{ route('admin.index') }}">Admin</a></div>
                            <div class="description">Manage all site</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="user icon"></i>
                        <div class="content">
                            <div class="title"><a href="{{ route('manager.index') }}">Manager</a></div>
                            <div class="description">Work with orders</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="user icon"></i>
                        <div class="content">
                            <div class="title"><a href="{{ route('master.index') }}">Master</a></div>
                            <div class="description">Create boxes</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="six wide column"></div>
        </div>
    </div>

@endsection