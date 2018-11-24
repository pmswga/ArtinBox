@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection

@section('content')

        <div class="ui internally celled stackable grid">
                <div class="row">
                    <div class="eight wide column">
                        <fieldset class="ui form segment">
                            <legend><h3>Создать заявку</h3></legend>

                            <form name="createOrder" method="POST" action="{{ route('orders.store') }}">
                                    @csrf
                                    <div class="field">
                                        <label>Тип ящика</label>
                                        <select name="box_type">
                                            @foreach ($boxesTypes as $boxType)
                                                <option value="{{ $boxType->id_box_type }}">{{ $boxType->caption }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="three fields">
                                        <div class="field">
                                            <label for="">Длина</label>
                                            <input type="number" min="0" id="lField" name="L" value="1000">
                                        </div>
                                        <div class="field">
                                            <label for="">Ширина</label>
                                            <input type="number" min="0" id="wField" name="W" value="1000">
                                        </div>
                                        <div class="field">
                                            <label for="">Высота</label>
                                            <input type="number" min="0" id="hField" name="H" value="1000">
                                        </div>
                                    </div>
                                    <div class="three fields">
                                        <div class="field">
                                            <label for="">Толщина каркаса (детали А, B, C)</label>
                                            <select name="S1" id="">
                                                <option value="15">Фанера 15</option>
                                                <option value="6">Фанера 6</option>
                                                <option value="18">Фанера 18</option>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <label for="">Толщина материала обвязки (детали O1-O6)</label>
                                            <select name="S2" id="">
                                                <option value="6">Фанера 6</option>
                                                <option value="9">Фанера 9</option>
                                                <option value="12">Фанера 12</option>
                                                <option value="20">Доска 20</option>
                                                <option value="30">Доска 30</option>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <label for="">Толщина дна (детали D)</label>
                                            <select name="S3" id="">
                                                <option value="18">Фанера 18</option>
                                                <option value="20">Фанера 20</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Дата создания заявки</label>
                                        <input type="date" readonly value="{{ date('Y-m-d') }}">
                                    </div>
                                <div class="field">
                                    <input type="hidden" name="sizes" value="">
                                    <input type="submit" class="ui primary button" value="Создать">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    <div class="eight wide column">
                        <fieldset class="ui form segment">
                            <legend><h3>Характеристика ящика</h3></legend>
                            <table class="ui table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Кол-во</th>
                                        <th>Размер, мм</th>
                                        <th>Материал</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Каркас</td>
                                        <td>Деталь А</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Деталь B</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Крышка</td>
                                        <td>Деталь С</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Уголок</td>
                                        <td>Деталь D</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Ручка</td>
                                        <td>Деталь Е</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Деталь F</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen wide column">
                    <fieldset class="ui blue segment">
                        <legend><h3>Заявки в производстве</h3></legend>
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
                                        <td>{{ $order->id_box_type }}</td>
                                        <td>{{ $order->getSizes()['L'].", ".$order->getSizes()['W'].", ".$order->getSizes()['H']  }}</td>
                                        <td>{{ $order->getCreateDate() }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('orders.destroy', $order) }}">
                                                @csrf
                                                @method('DELETE')

                                                <input type="submit" value="Delete">
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
    
        var calc = new CalculatorForStandartBoxType();

        calc.setS1(S1.PLYWOOD_9);
        calc.setS2(S2.PLYWOOD_18);
        calc.setS3(S3.PLYWOOD_18);
        calc.setW0(60);

        $("[name='L']").on('change', function () {
            calc.setL(this.value);
        });

        $("[name='W']").on('change', function () {
            calc.setW(this.value);
        });

        $("[name='H']").on('change', function () {
            calc.setH(this.value);
        });

        $('[name="createOrder"]').on('submit', function () {
            calc.setL(parseInt($("[name='L']").val()));
            calc.setW(parseInt($("[name='W']").val()));
            calc.setH(parseInt($("[name='H']").val()));

            $("[name='sizes']").attr('value', calc.getSizes());
        });        

    </script>

@endsection

