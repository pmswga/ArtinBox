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

                    @switch (Auth::user()->id_user_type)
                    @case(1)
                        <td><a href="{{ route('admin.archiveOrder', $order) }}">{{ $order->id_order }}</a></td>
                        @break
                    @case(2)
                        <td><a href="{{ route('manager.archiveOrder', $order) }}">{{ $order->id_order }}</a></td>
                        @break
                    @case(3)
                        <td><a href="{{ route('master.archiveOrder', $order) }}">{{ $order->id_order }}</a></td>
                        @break
                    @endswitch

                    <td>{{ $order->getBoxType() }}</td>
                    <td>{{ $order->getSizes()['L']."x".$order->getSizes()['W']."x".$order->getSizes()['H'] }}</td>
                    <td>{{ $order->getCreateDate() }}</td>
                    <td>{{ $order->getCreateDate() }}</td>
                    <td>{{ $order->getProcessTime() }}</td>
                    <td>{{ $order->getMaster()->name." ".$order->getMaster()->second_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h2>Выполненных заявок нет</h2>
@endif