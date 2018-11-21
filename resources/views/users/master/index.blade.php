@extends('users.master.layouts.app')
@slot('title') Панель мастера @endslot

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column"> 
                <table class="ui wide table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Тип ящика</th>
                            <th>Внутренние размеры</th>
                            <th>Дата создания</th>
                            <th>Выбрать</th>
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
                                <td>
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection