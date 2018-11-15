@extends('users.admin.layouts.app')
@section('title') Создание заявки @endsection


@section('content')


 <div class="ui grid">
    <div class="row">
        <div class="two wide column"></div>
        <div class="twelve wide column">
            <div class="ui segment">
                <form class="ui form" method="POST" action="{{ route('register') }}">
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
                        <input type="submit" class="ui primary button">
                    </div>
                </form>
            </div>
        </div>
        <div class="two wide column"></div>
    </div>
</div>

@endsection