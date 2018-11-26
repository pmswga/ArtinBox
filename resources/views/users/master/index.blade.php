@extends('users.master.layouts.app')
@section('title') Панель мастера @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">                 
                
                <fieldset class="ui green segment">
                    <legend>Доступные заявки</legend>
                    <table class="ui wide table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Тип ящика</th>
                                <th>Размеры</th>
                                <th>Автор</th>
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
                                    <td>{{ $order->getSizes()['L'].", ".$order->getSizes()['W'].", ".$order->getSizes()['H']  }}</td>
                                    <td>{{ $order->getAuthor() }}</td>
                                    <td>{{ $order->getCreateDate() }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('orders.update', $order) }}">
                                            @csrf
                                            @method('PUT')

                                            <input type="submit" id="assgin" class="ui primary button" value="Назначить себе">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('#assgin').on('click', function () {
            alert("Производство началось");
        });

    </script>

@endsection