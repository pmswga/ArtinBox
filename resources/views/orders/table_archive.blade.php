@if ($orders->count() != 0)
    <table class="ui wide table">
        <thead>
            <tr>
                <th>№</th>
                <th>Тип ящика</th>
                <th>Внутренние размеры (LxWxH, мм)</th>
                <th>Дата создания</th>
                <th>Дата производства</th>
                <th>Затраченное время</th>
                <th>Кто сделал</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id_order }}</td>
                    <td>{{ $order->getBoxType() }}</td>
                    <td>{{ $order->getSizes()['L']."x".$order->getSizes()['W']."x".$order->getSizes()['H'] }}</td>
                    <td>{{ $order->getCreateDate() }}</td>
                    <td>{{ $order->getCreateDate() }}</td>
                    <td>{{ $order->getProcessTime() }}</td>
                    <td>{{ $order->getMaster() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h2>Выполненных заявок нет</h2>
@endif