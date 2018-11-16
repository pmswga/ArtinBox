@extends('users.manager.layouts.app')
@section('title') Панель менеджера @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui segment">
                    <legend><h3>Заявки</h3></legend>
                    <table class="ui wide table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Тип ящика</th>
                                <th>Внутренние размеры</th>
                                <th>Дата создания</th>
                                <th>Автор</th>
                                <th>Статус</th>
                                <th><input type="checkbox"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>

@endsection