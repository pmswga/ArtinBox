@extends('users.manager.layouts.app')
@section('title') Заявки в процессе @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui orange segment">
                    <legend><h3>Заявки в процессе</h3></legend>
                    @if ($orders->count() != 0)
                        <table class="ui wide table">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Тип ящика</th>
                                    <th>Внутренние размеры</th>
                                    <th>Дата создания</th>
                                    <th>Дата завершения</th>
                                    <th>Мастер</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $order->getBoxType() }}</td>
                                        <td>{{ $order->sizes }}</td>
                                        <td>{{ $order->getCreateDate() }}</td>
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

