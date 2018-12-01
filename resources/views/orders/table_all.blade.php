@if ($orders->count() != 0)
    <table class="ui wide table">
        <thead>
            <tr>
                <th>№</th>
                <th>Тип ящика</th>
                <th>Внутренние размеры (LxWxH)</th>
                <th>Дата создания</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $order->getBoxType() }}</td>
                    <td>{{ $order->getSizes()['L']."x".$order->getSizes()['W']."x".$order->getSizes()['H'] }}</td>
                    <td>{{ $order->getCreateDate() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h2>Заявок, которые находятся в производстве нет</h2>
@endif