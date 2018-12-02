@extends('users.master.layouts.app')
@section('title') Панель мастера @endsection
@section('caption') Все заявки @endsection

@section('content')

    <fieldset class="ui green segment">
        <legend><h3>Все заявки</h3></legend>
        @if (count($orders) > 0)
            <table class="ui wide table">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Тип ящика</th>
                        <th>Внутренние размеры (LxWxH)</th>
                        <th>Дата создания</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($orders as $order)
                        <tr>
                            <td><a href="{{ route('master.order', $order) }}">{{ $order->id_order }}</a></td>
                            <td>{{ $order->getBoxType() }}</td>
                            <td>{{ $order->getSizes()['L']."x".$order->getSizes()['W']."x".$order->getSizes()['H']  }}</td>
                            <td>{{ $order->getCreateDate() }}</td>
                            <td>
                                <form method="POST" action="{{ route('orders.update', $order) }}">
                                    @csrf
                                    @method('PUT')

                                    <input type="submit" class="ui primary button" value="Начать производство">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h2>Заявок нет</h2>
        @endif
    </fieldset>
                

    <script type="text/javascript">
    
    </script>

@endsection