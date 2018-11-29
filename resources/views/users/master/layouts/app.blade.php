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

        <!-- Semantic UI -->
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <script src="{{ asset('js/semantic.js') }}"></script>
    </head>
    <body>
        <div class="ui pointing stackable menu">
            <img src="{{ asset('img/logo.png') }}" >
            <div class="header item">
                <h2>@yield('caption')</h2>
            </div>
            <div class="right menu">
                @auth
                    @include('auth.components.logout_button')
                @else
                    <a href="#" class="item">Exit</a>
                @endauth
            </div>
        </div>
        
        <div class="ui stackable internally celled grid">
            <div class="row">
                <div class="three wide column">
                    <div class="ui vertical menu" style="width: 100%">
                        <div class="item">
                            <div class="header"><h2>Мастер</h3></div>
                            <div class="ui vertical buttons" style="width: 100%;">
                                <a href="{{ route('master.index') }}" class="ui button" style="margin-bottom: 15px">Все заявки</a>
                                <a href="{{ route('master.production') }}" class="ui button" style="margin-bottom: 15px">В производстве</a>
                                <a href="#archive" class="ui button" style="margin-bottom: 15px">Архив</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thirteen wide column">
                    @yield('content')
                </div>
            </div>
        </div>

        <script type="text/javascript">
        
            $('.ui.dropdown').dropdown();

        </script>

    </body>
</html>

