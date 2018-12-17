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
            @switch (Auth::user()->id_user_type)
            @case(1)
                <a  href="{{ route('admin.index') }}"><img src="{{ asset('img/logo.png') }}" height="100%"></a>
                @break
            @case(2)
                <a  href="{{ route('manager.index') }}"><img src="{{ asset('img/logo.png') }}" height="100%"></a>
                @break
            @case(3)
                <a  href="{{ route('master.index') }}"><img src="{{ asset('img/logo.png') }}" height="100%"></a>
                @break
            @endswitch
            <div class="right menu">
                @auth
                    <a class="item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        Выйти
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
