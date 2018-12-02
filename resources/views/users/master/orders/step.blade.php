@extends('users.master.layouts.app')
@section('title') Панель мастера @endsection
@section('caption') Производство ящика @endsection

@section('content')

    <fieldset class="ui green segment">
        <legend><h2>Шаг {{ $order->getCurrentStepNumber() }} из {{ $order->getFinalStep() }}</h2></legend>
        <div class="ui grid">
            <div class="row">
                <div class="four wide column">
                    <img src="{{ asset('img/box_2.jpg') }}" alt="">
                </div>
                <div class="twelve wide column">
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th>Заявка</th>
                                <th>Тип ящика</th>
                                <th>Затраченное время</th>
                                <th>Детали заявки</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->id_order }}</td>
                                <td>{{ $order->getBoxType() }}</td>
                                <td>{{ $order->getProcessTime() }}</td>
                                <td><a href="{{ route('master.order', $order) }}">Просмотр</a></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Количество</th>
                                <th>Размер</th>
                                <th>Материал</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">{{ $order->getCurrentStepCaption() }}</td>

                                @switch ($order->getCurrentStepNumber())
                                @case (1)
                                    <td>{{ $order->getSizes()['sizes']['AN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['AN']['size_2'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['AN']['material'] }}</td>
                                    @break
                                @case (2)
                                    <td>{{ $order->getSizes()['sizes']['BN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['BN']['size_2'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['BN']['material'] }}</td>
                                    @break
                                @case (3)
                                    <td>{{ $order->getSizes()['sizes']['AN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['AN']['size_1'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['AN']['material'] }}</td>
                                    @break
                                @case (4)
                                    <td>{{ $order->getSizes()['sizes']['BN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['BN']['size_1'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['BN']['material'] }}</td>
                                    @break
                                @case (5)
                                    <td>{{ $order->getSizes()['sizes']['CN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['CN']['size_1'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['CN']['material'] }}</td>
                                    @break
                                @case (6)
                                    <td>{{ $order->getSizes()['sizes']['CN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['CN']['size_2'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['CN']['material'] }}</td>
                                    @break
                                @case (7)
                                    <td>{{ $order->getSizes()['sizes']['DN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['DN']['size_1'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['DN']['material'] }}</td>
                                    @break
                                @case (8)
                                    <td>{{ $order->getSizes()['sizes']['EN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['EN']['size_2'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['EN']['material'] }}</td>
                                    @break
                                @case (9)
                                    <td>{{ $order->getSizes()['sizes']['DN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['DN']['size_2'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['DN']['material'] }}</td>
                                    @break
                                @case (10)
                                    <td>{{ $order->getSizes()['sizes']['EN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['EN']['size_1'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['EN']['material'] }}</td>
                                    @break
                                @case (11)
                                    <td>{{ $order->getSizes()['sizes']['FN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['FN']['size_1'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['FN']['material'] }}</td>
                                    @break
                                @case (12)
                                    <td>{{ $order->getSizes()['sizes']['FN']['count'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['FN']['size_2'] }}</td>
                                    <td>{{ $order->getSizes()['sizes']['FN']['material'] }}</td>
                                    @break
                                @case (13)
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    @break
                                @case (14)
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    @break
                                @endswitch
                            </tr>
                        </tbody>
                    </table>
                    @if ($order->getCurrentStepNumber() < $order->getFinalStep())
                        <div class="ui actions">
                            <form action="{{ route('master.next_step', $order) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="submit" class="ui primary button" value="Следующий шаг">
                            </form>
                        </div>
                    @else
                        <div class="ui actions">
                            <form action="{{ route('master.end_step', $order) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="submit" class="ui green button" value="Закончить производство">
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </fieldset>

@endsection

