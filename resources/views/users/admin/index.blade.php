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
                                    <input type="number" min="0" name="L" value="1000">
                                </div>
                                <div class="field">
                                    <label for="">Ширина</label>
                                    <input type="number" min="0" name="W" value="1000">
                                </div>
                                <div class="field">
                                    <label for="">Высота</label>
                                    <input type="number" min="0" name="H" value="1000">
                                </div>
                            </div>
                            <div class="three fields">
                                <div class="field">
                                    <label for="">Толщина каркаса (детали А, B, C)</label>
                                    <select name="S1">
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_6') }}">{{ $materialsTypes->getData()['PLYWOOD_6']['material'] }} </option>
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">Фанера 18</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="">Толщина материала обвязки (детали О1, О2, О3, О4, О5)</label>
                                    <select name="S2">
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_21') }}">{{ $materialsTypes->getData()['PLYWOOD_21']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('WOOD_20') }}">{{ $materialsTypes->getData()['WOOD_20']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('WOOD_30') }}">{{ $materialsTypes->getData()['WOOD_30']['material'] }}</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="">Толщина дна (детали D)</label>
                                    <select name="S3">
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                                        <option value="{{ $materialsTypes->getMaterial('PLYWOOD_21') }}">{{ $materialsTypes->getData()['PLYWOOD_21']['material'] }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field">
                                    <label for="">Ширина материала обвязки</label>
                                    <input type="number" min="0" name="W0" value="60">
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
                        <table class="ui table" id="standartBoxTypeTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Деталь</th>
                                    <th>Обозначение</th>
                                    <th>Количество</th>
                                    <th>Размер 1</th>
                                    <th>Размер 2</th>
                                    <th>Обозначение</th>
                                    <th>Материал</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Крышка</td>
                                    <td>A</td>
                                    <td>AN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Панель B</td>
                                    <td>B</td>
                                    <td>BN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Панель С</td>
                                    <td>C</td>
                                    <td>CN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Дно</td>
                                    <td>D</td>
                                    <td>DN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Лыжи</td>
                                    <td>E</td>
                                    <td>EN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ручки</td>
                                    <td>F</td>
                                    <td>FN</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Обвязка</td>
                                    <td>O1</td>
                                    <td>O1N</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>O2</td>
                                    <td>O2N</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>O3</td>
                                    <td>O3N</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>O4</td>
                                    <td>O4N</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>O5</td>
                                    <td>O5N</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>06</td>
                                    <td>O6N</td>
                                    <td></td>
                                    <td></td>
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

    <script type="text/javascript">

        $('.menu .item').tab();
    
        var calc = new CalculatorForStandartBoxType();

        $("[name='S1'], [name='S2'], [name='S3'], [name='L'], [name='W'], [name='H'], [name='W0']").on('change', function () {

            calc.setL(parseInt($("[name='L']").val()));
            calc.setW(parseInt($("[name='W']").val()));
            calc.setH(parseInt($("[name='H']").val()));

            calc.setS1(JSON.parse($("[name='S1']").val()));
            calc.setS2(JSON.parse($("[name='S2']").val()));
            calc.setS3(JSON.parse($("[name='S3']").val()));
            calc.setW0(parseInt($("[name='W0']").val()));
            
            let sizes = JSON.parse(calc.getSizes());

            //Fill first column
            $('tbody tr:eq(0) td:eq(3)').text(sizes.sizes.AN.count);
            $('tbody tr:eq(1) td:eq(3)').text(sizes.sizes.BN.count);
            $('tbody tr:eq(2) td:eq(3)').text(sizes.sizes.CN.count);
            $('tbody tr:eq(3) td:eq(3)').text(sizes.sizes.DN.count);
            $('tbody tr:eq(4) td:eq(3)').text(sizes.sizes.EN.count);
            $('tbody tr:eq(5) td:eq(3)').text(sizes.sizes.FN.count);
            $('tbody tr:eq(6) td:eq(3)').text(sizes.sizes.ON.O1N.count);
            $('tbody tr:eq(7) td:eq(3)').text(sizes.sizes.ON.O2N.count);
            $('tbody tr:eq(8) td:eq(3)').text(sizes.sizes.ON.O3N.count);
            $('tbody tr:eq(9) td:eq(3)').text(sizes.sizes.ON.O4N.count);
            $('tbody tr:eq(10) td:eq(3)').text(sizes.sizes.ON.O5N.count);
            $('tbody tr:eq(11) td:eq(3)').text(sizes.sizes.ON.O6N.count);

            //Fill second column
            $('tbody tr:eq(0) td:eq(4)').text(sizes.sizes.AN.size_1);
            $('tbody tr:eq(1) td:eq(4)').text(sizes.sizes.BN.size_1);
            $('tbody tr:eq(2) td:eq(4)').text(sizes.sizes.CN.size_1);
            $('tbody tr:eq(3) td:eq(4)').text(sizes.sizes.DN.size_1);
            $('tbody tr:eq(4) td:eq(4)').text(sizes.sizes.EN.size_1);
            $('tbody tr:eq(5) td:eq(4)').text(sizes.sizes.FN.size_1);
            $('tbody tr:eq(6) td:eq(4)').text(sizes.sizes.ON.O1N.size_1);
            $('tbody tr:eq(7) td:eq(4)').text(sizes.sizes.ON.O2N.size_1);
            $('tbody tr:eq(8) td:eq(4)').text(sizes.sizes.ON.O3N.size_1);
            $('tbody tr:eq(9) td:eq(4)').text(sizes.sizes.ON.O4N.size_1);
            $('tbody tr:eq(10) td:eq(4)').text(sizes.sizes.ON.O5N.size_1);
            $('tbody tr:eq(11) td:eq(4)').text(sizes.sizes.ON.O6N.size_1);

            //Fill third column
            $('tbody tr:eq(0) td:eq(5)').text(sizes.sizes.AN.size_2);
            $('tbody tr:eq(1) td:eq(5)').text(sizes.sizes.BN.size_2);
            $('tbody tr:eq(2) td:eq(5)').text(sizes.sizes.CN.size_2);
            $('tbody tr:eq(3) td:eq(5)').text(sizes.sizes.DN.size_2);
            $('tbody tr:eq(4) td:eq(5)').text(sizes.sizes.EN.size_2);
            $('tbody tr:eq(5) td:eq(5)').text(sizes.sizes.FN.size_2);
            $('tbody tr:eq(6) td:eq(5)').text(sizes.sizes.ON.O1N.size_2);
            $('tbody tr:eq(7) td:eq(5)').text(sizes.sizes.ON.O2N.size_2);
            $('tbody tr:eq(8) td:eq(5)').text(sizes.sizes.ON.O3N.size_2);
            $('tbody tr:eq(9) td:eq(5)').text(sizes.sizes.ON.O4N.size_2);
            $('tbody tr:eq(10) td:eq(5)').text(sizes.sizes.ON.O5N.size_2);
            $('tbody tr:eq(11) td:eq(5)').text(sizes.sizes.ON.O6N.size_2);

            //Fill fourth column
            $('tbody tr:eq(0) td:eq(6)').text(sizes.sizes.AN.desg);
            $('tbody tr:eq(1) td:eq(6)').text(sizes.sizes.BN.desg);
            $('tbody tr:eq(2) td:eq(6)').text(sizes.sizes.CN.desg);
            $('tbody tr:eq(3) td:eq(6)').text(sizes.sizes.DN.desg);
            $('tbody tr:eq(4) td:eq(6)').text(sizes.sizes.EN.desg);
            $('tbody tr:eq(5) td:eq(6)').text(sizes.sizes.FN.desg);
            $('tbody tr:eq(6) td:eq(6)').text(sizes.sizes.ON.O1N.desg);
            $('tbody tr:eq(7) td:eq(6)').text(sizes.sizes.ON.O2N.desg);
            $('tbody tr:eq(8) td:eq(6)').text(sizes.sizes.ON.O3N.desg);
            $('tbody tr:eq(9) td:eq(6)').text(sizes.sizes.ON.O4N.desg);
            $('tbody tr:eq(10) td:eq(6)').text(sizes.sizes.ON.O5N.desg);
            $('tbody tr:eq(11) td:eq(6)').text(sizes.sizes.ON.O6N.desg);

            //Fill fifth column
            $('tbody tr:eq(0) td:eq(7)').text(sizes.sizes.AN.material);
            $('tbody tr:eq(1) td:eq(7)').text(sizes.sizes.BN.material);
            $('tbody tr:eq(2) td:eq(7)').text(sizes.sizes.CN.material);
            $('tbody tr:eq(3) td:eq(7)').text(sizes.sizes.DN.material);
            $('tbody tr:eq(4) td:eq(7)').text(sizes.sizes.EN.material);
            $('tbody tr:eq(5) td:eq(7)').text(sizes.sizes.FN.material);
            $('tbody tr:eq(6) td:eq(7)').text(sizes.sizes.ON.O1N.material);
            $('tbody tr:eq(7) td:eq(7)').text(sizes.sizes.ON.O2N.material);
            $('tbody tr:eq(8) td:eq(7)').text(sizes.sizes.ON.O3N.material);
            $('tbody tr:eq(9) td:eq(7)').text(sizes.sizes.ON.O4N.material);
            $('tbody tr:eq(10) td:eq(7)').text(sizes.sizes.ON.O5N.material);
            $('tbody tr:eq(11) td:eq(7)').text(sizes.sizes.ON.O6N.material);
        });

        $("[name='L']").on('change', function () {
            calc.setL(this.value);
        });

        $("[name='W']").on('change', function () {
            calc.setW(this.value);
        });

        $("[name='H']").on('change', function () {
            calc.setH(this.value);
        });

        $("[name='S1']").on('change', function () {
            calc.setS1(this.value);
        });

        $("[name='S2']").on('change', function () {
            calc.setS2(this.value);
        });

        $("[name='S3']").on('change', function () {
            calc.setS3(this.value);
        });

        $("[name='W0']").on('change', function () {
            calc.setW0(this.value);
        });
        
        

        $('[name="createOrder"]').on('submit', function () {
            calc.setL(parseInt($("[name='L']").val()));
            calc.setW(parseInt($("[name='W']").val()));
            calc.setH(parseInt($("[name='H']").val()));

            calc.setS1(JSON.parse($("[name='S1']").val()));
            calc.setS2(JSON.parse($("[name='S2']").val()));
            calc.setS3(JSON.parse($("[name='S3']").val()));
            calc.setW0(parseInt($("[name='W0']").val()));

            $("[name='sizes']").attr('value', calc.getSizes());
        });

    </script>

@endsection

