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

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Semantic UI -->
        <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
        <script src="{{ asset('js/semantic.js') }}"></script>
    </head>
    <body>
        <div class="ui pointing menu">
            <a href="{{ route('manager.index') }}" class="item">
                <h2>ArtinBox</h2>
            </a>
            <div class="ui dropdown item">
                Заявки
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a id="addOrder" href="#addOrder" class="item">Создать заявку</a>
                    <a href="{{ route('manager.orders') }}" class="item">Архив</a>
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

        <form method="POST" action="{{ route('register') }}">
            <div class="ui modal" id="addOrderModal">
                <div class="header">
                    Создать заявку
                </div>
                <div class="content">
                    <div class="ui form">
                        @csrf

                        <div class="field">
                            <label>Тип ящика</label>
                            <select name="box_type">
                                <option value="1">Живописный</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Дата создания заявки</label>
                            <input type="email">
                        </div>
                        <div class="field">
                            <label>Автор заявки</label>
                            <input type="text" value="Author">
                        </div>
                        <div class="field">
                            <label>Статус</label>
                            <select name="status_type" readonly>
                                <option value="1">В производстве</option>
                            </select>
                        </div>
                        <div class="field">
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" class="ui primary button">
                </div>
            </div>
        </form>

        <script type="text/javascript">
        
            $('.ui.dropdown').dropdown();

            $('#addOrder').on('click', function () {
                $('#addOrderModal').modal('show');
            });


        </script>

    </body>
</html>
