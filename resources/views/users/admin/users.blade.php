@extends('users.admin.layouts.app')
@section('title') Пользователи @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui segment">
                    <legend><h3>Добавить пользователя</h3></legend>
                    <form class="ui form" method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="field">
                            <label>Фамилия</label>
                            <input type="text" name="second_name">
                        </div>
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
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <table class="ui wide table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Тип пользователя</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->second_name }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->getUserType() }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ui basic button"><i class="red trash icon"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection