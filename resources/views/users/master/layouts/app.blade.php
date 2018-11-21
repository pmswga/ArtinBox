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
        <div class="ui pointing fluid menu">
            <a href="{{ route('master.index') }}" class="item">
                <h2>ArtinBox</h2>
            </a>
            <div class="right menu">
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

