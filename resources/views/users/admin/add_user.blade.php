@extends('users.admin.layouts.app')
@section('title', 'Добавление пользователя')

@section('content')

 <div class="ui grid">
    <div class="row">
        <div class="two wide column"></div>
        <div class="twelve wide column">
            <div class="ui segment">
                <form class="ui form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field">
                        <label>Имя</label>
                        <input type="text" name="name">
                    </div>
                    <div class="field">
                        <label>E-mail</label>
                        <input type="email" name="email">
                    </div>
                    <div class="field">
                        <label>Пароль</label>
                        <input type="password" name="password">
                    </div>
                    <div class="field">
                        <label>Повторить пароль</label>
                        <input type="password" name="password_confirmation">
                    </div>
                    <div class="field">
                        <label>Тип пользователя</label>
                        <select name="user_type">
                            <option value="3">Мастер</option>
                            <option value="2">Менеджер</option>
                            <option value="1">Администратор</option>
                        </select>
                    </div>
                    <div class="field">
                        <input type="submit" class="ui primary button">
                    </div>
                </form>
            </div>
        </div>
        <div class="two wide column"></div>
    </div>
</div>


@endsection