@extends('users.master.layouts.app')
@section('title') Панель мастера @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">                 
                <div class="ui cards">
                    @php $i = 1 @endphp
                    @foreach ($orders as $order)
                        <div class="card">
                            <div class="content">
                                <div class="header">Заявка № {{ $i++ }}</div>
                                <div class="meta">Автор: {{ $order->getAuthor() }}, дата создания: {{ $order->getCreateDate() }}</div>
                                <div class="description">
                                    <fieldset class="ui fluid segment">
                                        <legend><h3>Характеристика ящика</h3></legend>
                                        <table class="ui table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Кол-во</th>
                                                    <th>Размер, мм</th>
                                                    <th>Материал</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Каркас</td>
                                                    <td>Деталь А</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Деталь B</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Крышка</td>
                                                    <td>Деталь С</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Уголок</td>
                                                    <td>Деталь D</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Ручка</td>
                                                    <td>Деталь Е</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Деталь F</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </fieldset>
                                </div>
                                <div class="actions">
                                    <form method="POST" action="{{ route('orders.update', $order) }}">
                                        @csrf
                                        @method('PUT')

                                        <input type="submit" class="ui primary button" value="Выбрать">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <table class="ui wide table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Тип ящика</th>
                            <th>Внутренние размеры</th>
                            <th>Автор</th>
                            <th>Дата создания</th>
                            <th>Выбрать</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->getBoxType() }}</td>
                                <td>{{ $order->getSizes()['L'].", ".$order->getSizes()['W'].", ".$order->getSizes()['H']  }}</td>
                                <td>{{ $order->getAuthor() }}</td>
                                <td>{{ $order->getCreateDate() }}</td>
                                <td>
                                    <form method="POST" action="{{ route('orders.update', $order) }}">
                                        @csrf
                                        @method('PUT')

                                        <input type="submit" value="Assign">

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