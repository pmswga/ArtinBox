<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ArtinBox | Главная</title>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Semantic UI -->
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <script src="{{ asset('js/semantic.js') }}"></script>
    </head>
    <body>

        <div class="ui pointing stackable menu">
            <div href="{{ route('index') }}" class="header item">
                <h2>
                    ArtinBox
                    @auth
                        | {{ Auth::user()->getUserType() }}
                    @endauth
                </h2>
            </div>
            <div class="right menu">
                @auth
                    <a class="item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>

        @yield('content')

        <script type="text/javascript">

            $('.ui.dropdown').dropdown();
            $('.ui.accordion').accordion();

        </script>
    </body>
</html>
