@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui segment">
                    <legend><h3>Создать заявку</h3></legend>
                    <form class="ui form" method="POST" action="{{ route('orders.store') }}">
                        @csrf

                        <div class="field">
                            <label>Тип ящика</label>
                            <select name="box_type">
                                @foreach ($boxesTypes as $boxType)
                                    <option value="{{ $boxType->id_box_type }}">{{ $boxType->caption }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field">
                            <label>Дата создания заявки</label>
                            <input type="date" readonly value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="field">
                            <input type="submit" class="ui primary button" value="Создать">
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
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
                                <th>Выбрать</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $order->id_box_type }}</td>
                                    <td>{{ $order->sizes }}</td>
                                    <td>{{ $order->getCreateDate() }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('orders.destroy', $order) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="submit" name="id_order" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>

@endsection

