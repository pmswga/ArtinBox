@extends('users.admin.layouts.app')
@section('title') Панель администратора @endsection

@section('content')

        <div class="ui internally celled stackable grid">
                <div class="row">
                    <div class="sixteen wide column">
                        <div class="ui top attached tabular menu">
                            <a class="active item" data-tab="box_type_1">Стандартный (крышка сверху)</a>
                            <a class="item" data-tab="box_type_2">Живописный</a>
                        </div>
                        <div class="ui bottom attached active tab segment" data-tab="box_type_1">
                            <fieldset class="ui form segment">
                                <legend><h3>Общая информация по заявке</h3></legend>
                                <form name="createOrder" method="POST" action="{{ route('orders.store') }}">
                                    @csrf
                                    <!-- <div class="field">
                                        <label>Тип ящика</label>
                                        <select name="box_type">
                                            @foreach ($boxesTypes as $boxType)
                                                <option value="{{ $boxType->id_box_type }}">{{ $boxType->caption }}</option>
                                            @endforeach
                                        </select>
                                    </div> -->
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
                                            <label for="">Толщина материала обвязки (детали О1, О2, О3, О4, О5)</label>
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
                                        <div class="field">
                                            <label for="">Ширина материала обвязки</label>
                                            <input type="number" min="0" id="hField" name="W0" value="60">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Дата создания заявки</label>
                                        <input type="date" readonly value="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="field">
                                        <input type="hidden" name="box_type" value="1">
                                        <input type="hidden" name="sizes" value="">
                                        <input type="submit" class="ui primary button" value="Отправить на производство">
                                    </div>
                                </form>
                            </fieldset>
                            <fieldset class="ui form segment">
                                <legend><h3>Характеристика ящика</h3></legend>
                                <table class="ui table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Кол-во</th>
                                            <th>Размер 1 (мм)</th>
                                            <th>Размер 2 (мм)</th>
                                            <th>Материал</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Крышка</td>
                                            <td>Деталь А</td>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Панель B</td>
                                            <td>Деталь B</td>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Панель C</td>
                                            <td>Деталь С</td>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Дно</td>
                                            <td>Деталь D</td>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Лыжи</td>
                                            <td>Деталь Е</td>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ручки</td>
                                            <td>Деталь F</td>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                        <div class="ui bottom attached tab segment" data-tab="box_type_2">
                            Content
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sixteen wide column">
                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript">

        $('.menu .item').tab();
    
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

