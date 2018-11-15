@extends('users.admin.layouts.app')

@section('content')

    <div class="ui grid">
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <table class="ui wide table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Дата добавления</th>
                            <th>Тип пользователя</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->create_at }}</td>
                                <td>{{ $user->getUserType() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="two wide column"></div>
        </div>
    </div>

@endsection