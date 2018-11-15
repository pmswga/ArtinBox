@extends('users.admin.layouts.app')


@section('content')

    <div class="ui grid">
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <table class="ui wide table">
                    <thead>
                        <tr>
                            <th>№ заявки</th>
                            <th>Тип ящика</th>
                            <th>Внутренние размеры</th>
                            <th>Дата создания</th>
                            <th>Автор заявки</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="two wide column"></div>
        </div>
    </div>

@endsection

