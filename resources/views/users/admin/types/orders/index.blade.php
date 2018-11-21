@extends('users.admin.layouts.app')
@section('title') Статусы заявок @endsection

@section('content')

    <div class="ui internally celled grid">
        <div class="row">
            <div class="sixteen wide column">
                <table class="ui table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Наименование</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($ordersStatus as $orderStatus)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $orderStatus['caption'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
