<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

        <!-- Semantic UI -->
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <script src="{{ asset('js/semantic.js') }}"></script>

        @yield('head')
    </head>
    <body>
        <div class="ui pointing stackable menu">
            <a class="item" style="padding: 0px;" href="{{ route('index') }}">
                <div class="item" style="padding: 0px;">
                    <img src="{{ asset('img/logo.png') }}" style="width: 100%;">
                </div>
                <div class="item">
                    <h2>Мастер</h2>
                </div>
            </a>
            
            <div class="right menu">
                @auth
                    <div class="ui dropdown item">
                        {{ Auth::user()->name." ".Auth::user()->second_name }}
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item">{{ Auth::user()->getUserType() }}</div>
                            <a class="header item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <u>Выйти</u>
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
            $('#menu-title').text($('title').text());
        </script>

    </body>
</html>

