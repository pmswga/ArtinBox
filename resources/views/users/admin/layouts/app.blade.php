<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | @yield('title') </title>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/calculators.js') }}"></script>

        <!-- Semantic UI -->
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <script src="{{ asset('js/semantic.js') }}"></script>
    </head>
    <body>
        <div class="ui pointing stackable menu">
            <a href="{{ route('admin.index') }}" class="item">
                <h2>ArtinBox</h2>
            </a>
            <a href="{{ route('admin.index') }}" class="item">Главная</a>
            <a href="{{ route('admin.production') }}" class="item">Заявки в производстве</a>
            <a href="{{ route('admin.processes') }}" class="item">Заявки в процессе</a>
            <a href="{{ route('admin.archive') }}" class="item">Архивные заявки</a>
            <div class="right menu">
                <a href="{{ route('users.index') }}" class="item">Пользователи</a>
                <div class="ui dropdown item">
                    Настройки
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="{{ route('usersType.index') }}" class="item">Типы пользователей</a>
                        <a href="{{ route('ordersStatus.index') }}" class="item">Статусы заявок</a>
                        <a href="{{ route('boxesTypes.index') }}" class="item">Типы коробок</a>
                    </div>
                </div>
                @auth
                    @include('auth.components.logout_button')
                @else
                    <a href="#" class="item">Exit</a>
                @endauth
            </div>
        </div>
        
        <div class="ui fluid grid">
            <div class="row">
                <div class="sixteen wide column">
                    @yield('content')
                </div>
            </div>
        </div>
    

        <script type="text/javascript">
        
            $('.ui.dropdown').dropdown();

        </script>

    </body>
</html>

