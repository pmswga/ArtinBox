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
            <a href="{{ route('index') }}">
                <img src="{{ asset('img/logo.png') }}" height="100%"> 
            </a>
            
            <div class="right menu">
                @auth
                    <div class="ui dropdown item">
                        {{ Auth::user()->name." ".Auth::user()->second_name }}
                        <i class="dropdown icon"></i>
                        <div class="menu">    
                            <a class="header item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Выйти
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
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

