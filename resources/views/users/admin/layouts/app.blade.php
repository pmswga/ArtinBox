<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | Admin Panel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Semantic UI -->
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <script src="{{ asset('js/semantic.js') }}" defer></script>
    </head>
    <body>
        <div class="ui pointing menu">
            <div class="item">
                <h2>ArtinBox</h2>
            </div>
            <div class="ui dropdown item">
                Пользователи
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="#add_manager" class="item">Добавить менеджера</a>
                    <a href="#add_master" class="item">Добавить мастера</a>
                </div>
            </div>
            <div class="ui dropdown item">
                Заявки
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="#add_manager" class="item">Создать заявку</a>
                    <a href="#add_master" class="item">Архив</a>
                </div>
            </div>
            <div class="right menu">
                @auth

                @else
                    <a href="#" class="item">Exit</a>
                @endauth
            </div>
        </div>
        
        <div class="ui grid">
            <div class="row">
                <div class="sixteen wide column">
                    @yield('content')
                </div>
            </div>
        </div>
    
        <script type="text/javascript">
        
            $('document').ready(function(){
                alert("Hello World");
            });

        </script>

    </body>
</html>

