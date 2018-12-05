@extends('users.admin.layouts.app')
@section('title') Мои заявки @endsection
@section('caption') Детали заявки @endsection

@section('content')

    <div class="ui stackable grid">
        <div class="row">
            <div class="six wide column">
                <h2>Заявка {{ $order->id_order }}</h2>
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
                        <tr>
                            <td colspan="2">Толщина каркаса (детали A и B)</td>
                            <td>{{ $order->getSizes()['S']['S1']['material'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Толщина крышек (деталь C)</td>
                            <td>{{ $order->getSizes()['S']['S2']['material'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Толщина уголков (деталь D)</td>
                            <td>{{ $order->getSizes()['S']['S3']['material'] }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="actions">
                    @if (Auth::user()->id_user === 3)
                        @if ($order->getMaster() === null)
                            <form method="POST" action="{{ route('orders.update', $order) }}">
                                @csrf
                                @method('PUT')

                                <input type="submit" class="ui teal button" style="width: 100%" value="Начать производство">
                            </form>
                        @endif

                        @if ($order->id_master === Auth::user()->id_user)
                            <a href="{{ route('master.step', $order) }}" style="width: 100%" class="ui primary button">Производство</a>
                        @endif
                    @endif
                </div>
            </div>
            <div class="ten wide column">
                @switch ($order->id_box_type)

                @case(1)
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th colspan="8">Список деталей</th>
                            </tr>
                            <tr>
                                <th></th>
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
                                <td>Крышка</td>
                                <td>A</td>
                                <td>AN</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Панель B</td>
                                <td>B</td>
                                <td>BN</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Панель С</td>
                                <td>C</td>
                                <td>CN</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Дно</td>
                                <td>D</td>
                                <td>DN</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Лыжи</td>
                                <td>E</td>
                                <td>EN</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Ручки</td>
                                <td>F</td>
                                <td>FN</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Обвязка</td>
                                <td>O1</td>
                                <td>O1N</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O1N']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O1N']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O1N']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O1N']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O1N']['material'] }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>O2</td>
                                <td>O2N</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O2N']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O2N']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O2N']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O2N']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O2N']['material'] }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>O3</td>
                                <td>O3N</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O3N']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O3N']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O3N']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O3N']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O3N']['material'] }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>O4</td>
                                <td>O4N</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O4N']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O4N']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O4N']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O4N']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O4N']['material'] }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>O5</td>
                                <td>O5N</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O5N']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O5N']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O5N']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O5N']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O5N']['material'] }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>06</td>
                                <td>O6N</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O6N']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O6N']['size_1'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O6N']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O6N']['desg'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['ON']['O6N']['material'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @break
                @case(3)
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th colspan="8">Список деталей</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Деталь</th>
                                <th>Обозначение</th>
                                <th>Кол-во</th>
                                <th>Размер</th>
                                <th>Материал</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Крышка</td>
                                <td>A</td>
                                <td>AN</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['size_1'].' x '.$order->getSizes()['sizes']['AN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['AN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Панель B</td>
                                <td>B</td>
                                <td>BN</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['size_1'].' x '.$order->getSizes()['sizes']['BN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['BN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Панель С</td>
                                <td>C</td>
                                <td>CN</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['size_1'].' x '.$order->getSizes()['sizes']['CN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['CN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Дно</td>
                                <td>D</td>
                                <td>DN</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['size_1'].' x '.$order->getSizes()['sizes']['DN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['DN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Лыжи</td>
                                <td>E</td>
                                <td>EN</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['size_1'].' x '.$order->getSizes()['sizes']['EN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['EN']['material'] }}</td>
                            </tr>
                            <tr>
                                <td>Ручки</td>
                                <td>F</td>
                                <td>FN</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['count'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['size_1'].' x '.$order->getSizes()['sizes']['FN']['size_2'] }}</td>
                                <td>{{ $order->getSizes()['sizes']['FN']['material'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @break
                @endswitch
                <p>{{ $order->getProductionStepsDescp() }}</p>
                <img src="{{ asset('img/box.png') }}" class="ui fluid image" alt="">
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $('.ui.accordion').accordion();

    </script>

@endsection