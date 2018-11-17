@extends('users.admin.layouts.app')
@section('title') Типы пользователей @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Наименование</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($usersType as $userType)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $userType['caption'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection