@extends('users.master.layouts.app')
@section('title') Мои заявки @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <div class="ui styled accordion" style="width: 100%">
                    @php $i = 1 @endphp
                    @foreach ($orders as $order)
                        <div class="title">
                            Заявка № {{ $i++ }}
                        </div>
                        <div class="content">
                            <div class="ui stackable grid">
                                <div class="row">
                                    <div class="six wide column">
                                        <table class="ui celled table">
                                            <thead>
                                                <tr>
                                                    <th>Автор</th>
                                                    <th>Тип коробки</th>
                                                    <th>Дата создания</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $order->getAuthor() }}</td>
                                                    <td>{{ $order->getBoxType() }}</td>
                                                    <td>{{ $order->getCreateDate() }}</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Общая характеристика ящика</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2">Длина внутренняя (мм)</td>
                                                    <td>{{ $order->getSizes()['L'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Ширина внутренняя (мм)</td>
                                                    <td>{{ $order->getSizes()['W'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Высота внутренняя (мм)</td>
                                                    <td>{{ $order->getSizes()['H'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ten wide column">
                                        <table class="ui table">
                                            <thead>
                                                <tr>
                                                    <th>Деталь</th>
                                                    <th>Обозначение</th>
                                                    <th>Количество</th>
                                                    <th>Размер 1</th>
                                                    <th>Размер 2</th>
                                                    <th>Обозначение</th>
                                                    <th>Материал</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>A</td>
                                                    <td>AN</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['AN'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>B</td>
                                                    <td>BN</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['BN'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>C</td>
                                                    <td>CN</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['CN'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>D</td>
                                                    <td>DN</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['DN'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>E</td>
                                                    <td>EN</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['EN'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>F</td>
                                                    <td>FN</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['FN'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>O1</td>
                                                    <td>O1N</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['O1N'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>O2</td>
                                                    <td>O2N</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['O2N'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>O3</td>
                                                    <td>O3N</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['O3N'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>O4</td>
                                                    <td>O4N</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['O4N'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>O5</td>
                                                    <td>O5N</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['O5N'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>06</td>
                                                    <td>O6N</td>
                                                    <td></td>
                                                    <td>{{ $order->getSizes()['O6N'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('.ui.accordion').accordion();

    </script>

@endsection
