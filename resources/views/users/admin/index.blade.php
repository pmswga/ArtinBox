@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui blue segment">
                    <legend><h3>Заявки в производстве</h3></legend>
                    <table class="ui wide table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Тип ящика</th>
                                <th>Внутренние размеры</th>
                                <th>Дата создания</th>
                                <th>Автор</th>
                                <th><input type="checkbox"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui orange segment">
                    <legend><h3>Заявки в процессе</h3></legend>
                    <table class="ui wide table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Тип ящика</th>
                                <th>Внутренние размеры</th>
                                <th>Дата создания</th>
                                <th>Автор</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui green segment">
                    <legend><h3>Архив выполненных заявок</h3></legend>
                    <table class="ui wide table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Тип ящика</th>
                                <th>Внутренние размеры</th>
                                <th>Дата создания</th>
                                <th>Дата завершения</th>
                                <th>Автор</th>
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

