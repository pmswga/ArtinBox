@extends('users.manager.layouts.app')
@section('title') Панель менеджера @endsection
@section('caption') В производстве @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui orange segment">
                    <legend><h3>Заявки в производстве</h3></legend>
                    @if ($orders->count() != 0)
                        <table class="ui wide table">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Тип ящика</th>
                                    <th>Внутренние размеры (длина, ширина, высота)</th>
                                    <th>Дата создания</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $order->getBoxType() }}</td>
                                        <td>{{ $order->getSizes()['L']." мм, ".$order->getSizes()['W']." мм, ".$order->getSizes()['H']." мм" }}</td>
                                        <td>{{ $order->getCreateDate() }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('orders.destroy', $order) }}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="ui red button" value="Удалить">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>Заявок, которые находятся в процессе нет</h2>
                    @endif
                </fieldset>
            </div>
        </div>
    </div>

@endsection

