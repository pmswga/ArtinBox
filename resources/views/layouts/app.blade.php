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
            @auth
                @switch (Auth::user()->id_user_type)
                @case(1)
                    <a class="item" style="padding: 0px;" href="{{ route('admin.index') }}">
                        <div class="item" style="padding: 0px;">
                            <img src="{{ asset('img/logo.png') }}" style="width: 100%;">
                        </div>
                        <div class="item">
                            <h2>Мастер</h2>
                        </div>
                    </a>
                    @break
                @case(2)
                    <a class="item" style="padding: 0px;" href="{{ route('manager.index') }}">
                        <div class="item" style="padding: 0px;">
                            <img src="{{ asset('img/logo.png') }}" style="width: 100%;">
                        </div>
                        <div class="item">
                            <h2>Мастер</h2>
                        </div>
                    </a>
                    @break
                @case(3)
                    <a class="item" style="padding: 0px;" href="{{ route('master.index') }}">
                        <div class="item" style="padding: 0px;">
                            <img src="{{ asset('img/logo.png') }}" style="width: 100%;">
                        </div>
                        <div class="item">
                            <h2>Мастер</h2>
                        </div>
                    </a>
                    @break
                @endswitch
            @else
                <a class="item" style="padding: 0px;" href="{{ route('index') }}">
                    <div class="item" style="padding: 0px;">
                        <img src="{{ asset('img/logo.png') }}" style="width: 100%;">
                    </div>
                    <div class="item">
                        <h2>Мастер</h2>
                    </div>
                </a>
            @endauth
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
