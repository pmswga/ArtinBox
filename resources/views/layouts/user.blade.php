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

        @yield('head')

    </head>
    <body>
        <div class="ui pointing stackable menu">
            <a href="@yield('link')">
                @yield('logo')
            </a>
            
            <div class="right menu">
                @auth
                    <div class="header item">
                        {{ Auth::user()->name." ".Auth::user()->second_name }}
                    </div>
                    <div class="header item">
                        {{ Auth::user()->getUserType() }}
                    </div>
                    @include('auth.components.logout_button')
                @endauth
            </div>
        </div>
        
        <div class="ui stackable internally celled grid">
            <div class="row">
                <div class="three wide column">
                    @yield('menu')
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

