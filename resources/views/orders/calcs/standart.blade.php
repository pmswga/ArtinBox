<fieldset class="ui form segment">
    <legend><h3>Общая информация по заявке</h3></legend>
    <form name="createStandartOrder" method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div class="three fields">
            <div class="field">
                <label for="">Длина</label>
                <input type="number" min="0" name="stBoxL" value="1000">
            </div>
            <div class="field">
                <label for="">Ширина</label>
                <input type="number" min="0" name="stBoxW" value="1000">
            </div>
            <div class="field">
                <label for="">Высота</label>
                <input type="number" min="0" name="stBoxH" value="1000">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label for="">Толщина каркаса (детали А, B, C)</label>
                <select name="stBoxS1">
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_6') }}">{{ $materialsTypes->getData()['PLYWOOD_6']['material'] }} </option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                </select>
            </div>
            <div class="field">
                <label for="">Толщина материала обвязки (детали О1, О2, О3, О4, О5)</label>
                <select name="stBoxS2">
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_21') }}">{{ $materialsTypes->getData()['PLYWOOD_21']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('WOOD_20') }}">{{ $materialsTypes->getData()['WOOD_20']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('WOOD_30') }}">{{ $materialsTypes->getData()['WOOD_30']['material'] }}</option>
                </select>
            </div>
            <div class="field">
                <label for="">Толщина дна (детали D)</label>
                <select name="stBoxS3">
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_21') }}">{{ $materialsTypes->getData()['PLYWOOD_21']['material'] }}</option>
                </select>
            </div>
        </div>
        <div class="field">
            <input type="hidden" min="0" name="stBoxW0" value="60">
            <input type="hidden" readonly value="{{ date('Y-m-d') }}">
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


<script type="text/javascript">

    $('.menu .item').tab();

    var calc = new CalculatorForStandartBoxType();
    var calc2 = new CalculatorForPicturesqueBoxType();

    $("[name='stBoxS1'], [name='stBoxS2'], [name='stBoxS3'], [name='stBoxL'], [name='stBoxW'], [name='stBoxH'], [name='stBoxW0']").on('change', function () {

        calc.setL(parseInt($("[name='stBoxL']").val()));
        calc.setW(parseInt($("[name='stBoxW']").val()));
        calc.setH(parseInt($("[name='stBoxH']").val()));

        calc.setS1(JSON.parse($("[name='stBoxS1']").val()));
        calc.setS2(JSON.parse($("[name='stBoxS2']").val()));
        calc.setS3(JSON.parse($("[name='stBoxS3']").val()));
        calc.setW0(parseInt($("[name='stBoxW0']").val()));
        
        let sizes = JSON.parse(calc.getSizes());

        //Fill first column
        $('#standartBoxTypeTable tr:eq(1) td:eq(3)').text(sizes.sizes.AN.count);
        $('#standartBoxTypeTable tr:eq(2) td:eq(3)').text(sizes.sizes.BN.count);
        $('#standartBoxTypeTable tr:eq(3) td:eq(3)').text(sizes.sizes.CN.count);
        $('#standartBoxTypeTable tr:eq(4) td:eq(3)').text(sizes.sizes.DN.count);
        $('#standartBoxTypeTable tr:eq(5) td:eq(3)').text(sizes.sizes.EN.count);
        $('#standartBoxTypeTable tr:eq(6) td:eq(3)').text(sizes.sizes.FN.count);
        $('#standartBoxTypeTable tr:eq(7) td:eq(3)').text(sizes.sizes.ON.O1N.count);
        $('#standartBoxTypeTable tr:eq(8) td:eq(3)').text(sizes.sizes.ON.O2N.count);
        $('#standartBoxTypeTable tr:eq(9) td:eq(3)').text(sizes.sizes.ON.O3N.count);
        $('#standartBoxTypeTable tr:eq(10) td:eq(3)').text(sizes.sizes.ON.O4N.count);
        $('#standartBoxTypeTable tr:eq(11) td:eq(3)').text(sizes.sizes.ON.O5N.count);
        $('#standartBoxTypeTable tr:eq(12) td:eq(3)').text(sizes.sizes.ON.O6N.count);

        //Fill second column
        $('#standartBoxTypeTable tr:eq(1) td:eq(4)').text(sizes.sizes.AN.size_1);
        $('#standartBoxTypeTable tr:eq(2) td:eq(4)').text(sizes.sizes.BN.size_1);
        $('#standartBoxTypeTable tr:eq(3) td:eq(4)').text(sizes.sizes.CN.size_1);
        $('#standartBoxTypeTable tr:eq(4) td:eq(4)').text(sizes.sizes.DN.size_1);
        $('#standartBoxTypeTable tr:eq(5) td:eq(4)').text(sizes.sizes.EN.size_1);
        $('#standartBoxTypeTable tr:eq(6) td:eq(4)').text(sizes.sizes.FN.size_1);
        $('#standartBoxTypeTable tr:eq(7) td:eq(4)').text(sizes.sizes.ON.O1N.size_1);
        $('#standartBoxTypeTable tr:eq(8) td:eq(4)').text(sizes.sizes.ON.O2N.size_1);
        $('#standartBoxTypeTable tr:eq(9) td:eq(4)').text(sizes.sizes.ON.O3N.size_1);
        $('#standartBoxTypeTable tr:eq(10) td:eq(4)').text(sizes.sizes.ON.O4N.size_1);
        $('#standartBoxTypeTable tr:eq(11) td:eq(4)').text(sizes.sizes.ON.O5N.size_1);
        $('#standartBoxTypeTable tr:eq(12) td:eq(4)').text(sizes.sizes.ON.O6N.size_1);

        //Fill third column
        $('#standartBoxTypeTable tr:eq(1) td:eq(5)').text(sizes.sizes.AN.size_2);
        $('#standartBoxTypeTable tr:eq(2) td:eq(5)').text(sizes.sizes.BN.size_2);
        $('#standartBoxTypeTable tr:eq(3) td:eq(5)').text(sizes.sizes.CN.size_2);
        $('#standartBoxTypeTable tr:eq(4) td:eq(5)').text(sizes.sizes.DN.size_2);
        $('#standartBoxTypeTable tr:eq(5) td:eq(5)').text(sizes.sizes.EN.size_2);
        $('#standartBoxTypeTable tr:eq(6) td:eq(5)').text(sizes.sizes.FN.size_2);
        $('#standartBoxTypeTable tr:eq(7) td:eq(5)').text(sizes.sizes.ON.O1N.size_2);
        $('#standartBoxTypeTable tr:eq(8) td:eq(5)').text(sizes.sizes.ON.O2N.size_2);
        $('#standartBoxTypeTable tr:eq(9) td:eq(5)').text(sizes.sizes.ON.O3N.size_2);
        $('#standartBoxTypeTable tr:eq(10) td:eq(5)').text(sizes.sizes.ON.O4N.size_2);
        $('#standartBoxTypeTable tr:eq(11) td:eq(5)').text(sizes.sizes.ON.O5N.size_2);
        $('#standartBoxTypeTable tr:eq(12) td:eq(5)').text(sizes.sizes.ON.O6N.size_2);

        //Fill fourth column
        $('#standartBoxTypeTable tr:eq(1) td:eq(6)').text(sizes.sizes.AN.desg);
        $('#standartBoxTypeTable tr:eq(2) td:eq(6)').text(sizes.sizes.BN.desg);
        $('#standartBoxTypeTable tr:eq(3) td:eq(6)').text(sizes.sizes.CN.desg);
        $('#standartBoxTypeTable tr:eq(4) td:eq(6)').text(sizes.sizes.DN.desg);
        $('#standartBoxTypeTable tr:eq(5) td:eq(6)').text(sizes.sizes.EN.desg);
        $('#standartBoxTypeTable tr:eq(6) td:eq(6)').text(sizes.sizes.FN.desg);
        $('#standartBoxTypeTable tr:eq(7) td:eq(6)').text(sizes.sizes.ON.O1N.desg);
        $('#standartBoxTypeTable tr:eq(8) td:eq(6)').text(sizes.sizes.ON.O2N.desg);
        $('#standartBoxTypeTable tr:eq(9) td:eq(6)').text(sizes.sizes.ON.O3N.desg);
        $('#standartBoxTypeTable tr:eq(10) td:eq(6)').text(sizes.sizes.ON.O4N.desg);
        $('#standartBoxTypeTable tr:eq(11) td:eq(6)').text(sizes.sizes.ON.O5N.desg);
        $('#standartBoxTypeTable tr:eq(12) td:eq(6)').text(sizes.sizes.ON.O6N.desg);

        //Fill fifth column
        $('#standartBoxTypeTable tr:eq(1) td:eq(7)').text(sizes.sizes.AN.material);
        $('#standartBoxTypeTable tr:eq(2) td:eq(7)').text(sizes.sizes.BN.material);
        $('#standartBoxTypeTable tr:eq(3) td:eq(7)').text(sizes.sizes.CN.material);
        $('#standartBoxTypeTable tr:eq(4) td:eq(7)').text(sizes.sizes.DN.material);
        $('#standartBoxTypeTable tr:eq(5) td:eq(7)').text(sizes.sizes.EN.material);
        $('#standartBoxTypeTable tr:eq(6) td:eq(7)').text(sizes.sizes.FN.material);
        $('#standartBoxTypeTable tr:eq(7) td:eq(7)').text(sizes.sizes.ON.O1N.material);
        $('#standartBoxTypeTable tr:eq(8) td:eq(7)').text(sizes.sizes.ON.O2N.material);
        $('#standartBoxTypeTable tr:eq(9) td:eq(7)').text(sizes.sizes.ON.O3N.material);
        $('#standartBoxTypeTable tr:eq(10) td:eq(7)').text(sizes.sizes.ON.O4N.material);
        $('#standartBoxTypeTable tr:eq(11) td:eq(7)').text(sizes.sizes.ON.O5N.material);
        $('#standartBoxTypeTable tr:eq(12) td:eq(7)').text(sizes.sizes.ON.O6N.material);
    });

    $("[name='stBoxL']").on('change', function () {
        calc.setL(this.value);
    });

    $("[name='stBoxW']").on('change', function () {
        calc.setW(this.value);
    });

    $("[name='stBoxH']").on('change', function () {
        calc.setH(this.value);
    });

    $("[name='stBoxS1']").on('change', function () {
        calc.setS1(this.value);
    });

    $("[name='stBoxS2']").on('change', function () {
        calc.setS2(this.value);
    });

    $("[name='stBoxS3']").on('change', function () {
        calc.setS3(this.value);
    });

    $("[name='stBoxW0']").on('change', function () {
        calc.setW0(this.value);
    });

    $('[name="createStandartOrder"]').on('submit', function () {
        calc.setL(parseInt($("[name='stBoxL']").val()));
        calc.setW(parseInt($("[name='stBoxW']").val()));
        calc.setH(parseInt($("[name='stBoxH']").val()));

        calc.setS1(JSON.parse($("[name='stBoxS1']").val()));
        calc.setS2(JSON.parse($("[name='stBoxS2']").val()));
        calc.setS3(JSON.parse($("[name='stBoxS3']").val()));
        calc.setW0(parseInt($("[name='stBoxW0']").val()));

        $("[name='sizes']:first()").attr('value', calc.getSizes());
        alert("Заявка успешно создана");
    });
</script>

