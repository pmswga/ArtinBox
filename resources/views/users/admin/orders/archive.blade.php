@extends('users.admin.layouts.app')
@section('title') Архив выполненных заявок @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <fieldset class="ui green segment">
                    <legend><h3>Архив выполненных заявок</h3></legend>
                    @if ($orders->count() != 0)
                        <table class="ui stackable table">
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
                        <h2>Выполненных заявок нет</h2>
                    @endif
                </fieldset>
            </div>
        </div>
    </div>

@endsection

