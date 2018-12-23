@if ($orders->count() != 0)
    <table class="ui wide table">
        <thead>
            <tr>
                <th>№</th>
                <th>Тип ящика</th>
                <th>Внутренние размеры (LxWxH, мм)</th>
                <th>Дата создания</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td><a href="{{ route('manager.order', $order) }}">{{ $order->id_order }}</a></td>
                    <td>{{ $order->getBoxType() }}</td>
                    <td>{{ $order->getSizes()['L']."x".$order->getSizes()['W']."x".$order->getSizes()['H']  }}</td>
                    <td>{{ $order->getCreateDate() }}</td>
                    <td>
                        <form action="{{ route('orders.destroy', $order) }}" onsubmit='return confirm("Удалить заявку?");' method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ui basic button"><i class="red trash icon"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h2>Заявок в производстве нет</h2>
@endif