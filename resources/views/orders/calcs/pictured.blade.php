<fieldset class="ui form segment">
    <legend><h3>Общая информация по заявке</h3></legend>
    <form name="createPicturesOrder" method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div class="three fields">
            <div class="field">
                <label for="">Длина</label>
                <input type="number" min="0" name="picturesBoxL" value="1000">
            </div>
            <div class="field">
                <label for="">Ширина</label>
                <input type="number" min="0" name="picturesBoxW" value="1000">
            </div>
            <div class="field">
                <label for="">Высота</label>
                <input type="number" min="0" name="picturesBoxH" value="1000">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label for="">Толщина каркаса (детали А и B)</label>
                <select name="picturesBoxS1">
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_15') }}">{{ $materialsTypes->getData()['PLYWOOD_15']['material'] }} </option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_21') }}">{{ $materialsTypes->getData()['PLYWOOD_21']['material'] }}</option>
                </select>
            </div>
            <div class="field">
                <label for="">Толщина крышек (детали С)</label>
                <select name="picturesBoxS2">
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_6') }}">{{ $materialsTypes->getData()['PLYWOOD_6']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_9') }}">{{ $materialsTypes->getData()['PLYWOOD_9']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_12') }}">{{ $materialsTypes->getData()['PLYWOOD_12']['material'] }}</option>
                </select>
            </div>
            <div class="field">
                <label for="">Толщина уголков (деталь D)</label>
                <select name="picturesBoxS3">
                    <option value="{{ $materialsTypes->getMaterial('WOOD_20') }}">{{ $materialsTypes->getData()['WOOD_20']['material'] }}</option>
                    <option value="{{ $materialsTypes->getMaterial('PLYWOOD_18') }}">{{ $materialsTypes->getData()['PLYWOOD_18']['material'] }}</option>
                </select>
            </div>
        </div>
        <div class="field">
            <input type="hidden" readonly value="{{ date('Y-m-d') }}">
            <input type="hidden" name="box_type" value="3">
            <input type="hidden" name="sizes" value="">
            <input type="submit" class="ui primary button" value="Отправить на производство">
        </div>
    </form>
</fieldset>
<fieldset class="ui form segment">
    <legend><h3>Характеристика ящика</h3></legend>
    <table class="ui table" id="picturesBoxTypeTable">
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
                <td>Каркас</td>
                <td>A</td>
                <td>AN</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>B</td>
                <td>BN</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Крышка</td>
                <td>C</td>
                <td>CN</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Уголок</td>
                <td>D</td>
                <td>DN</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Ручка</td>
                <td>E</td>
                <td>EN</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>F</td>
                <td>FN</td>
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

    var picturedCalc = new CalculatorForPicturesqueBoxType();

    $("[name='picturesBoxS1'], [name='picturesBoxS2'], [name='picturesBoxS3'], [name='picturesBoxL'], [name='picturesBoxW'], [name='picturesBoxH']").on('change', function () {

        picturedCalc.setL(parseInt($("[name='picturesBoxL']").val()));
        picturedCalc.setW(parseInt($("[name='picturesBoxW']").val()));
        picturedCalc.setH(parseInt($("[name='picturesBoxH']").val()));

        picturedCalc.setS1(JSON.parse($("[name='picturesBoxS1']").val()));
        picturedCalc.setS2(JSON.parse($("[name='picturesBoxS2']").val()));
        picturedCalc.setS3(JSON.parse($("[name='picturesBoxS3']").val()));
        
        let sizes = JSON.parse(picturedCalc.getSizes());

        //Fill first column
        $('#picturesBoxTypeTable tr:eq(1) td:eq(3)').text(sizes.sizes.AN.count);
        $('#picturesBoxTypeTable tr:eq(2) td:eq(3)').text(sizes.sizes.BN.count);
        $('#picturesBoxTypeTable tr:eq(3) td:eq(3)').text(sizes.sizes.CN.count);
        $('#picturesBoxTypeTable tr:eq(4) td:eq(3)').text(sizes.sizes.DN.count);
        $('#picturesBoxTypeTable tr:eq(5) td:eq(3)').text(sizes.sizes.EN.count);
        $('#picturesBoxTypeTable tr:eq(6) td:eq(3)').text(sizes.sizes.FN.count);

        //Fill second column
        $('#picturesBoxTypeTable tr:eq(1) td:eq(4)').text(sizes.sizes.AN.size_1);
        $('#picturesBoxTypeTable tr:eq(2) td:eq(4)').text(sizes.sizes.BN.size_1);
        $('#picturesBoxTypeTable tr:eq(3) td:eq(4)').text(sizes.sizes.CN.size_1);
        $('#picturesBoxTypeTable tr:eq(4) td:eq(4)').text(sizes.sizes.DN.size_1);
        $('#picturesBoxTypeTable tr:eq(5) td:eq(4)').text(sizes.sizes.EN.size_1);
        $('#picturesBoxTypeTable tr:eq(6) td:eq(4)').text(sizes.sizes.FN.size_1);

        //Fill third column
        $('#picturesBoxTypeTable tr:eq(1) td:eq(5)').text(sizes.sizes.AN.size_2);
        $('#picturesBoxTypeTable tr:eq(2) td:eq(5)').text(sizes.sizes.BN.size_2);
        $('#picturesBoxTypeTable tr:eq(3) td:eq(5)').text(sizes.sizes.CN.size_2);
        $('#picturesBoxTypeTable tr:eq(4) td:eq(5)').text(sizes.sizes.DN.size_2);
        $('#picturesBoxTypeTable tr:eq(5) td:eq(5)').text(sizes.sizes.EN.size_2);
        $('#picturesBoxTypeTable tr:eq(6) td:eq(5)').text(sizes.sizes.FN.size_2);
        
        //Fill fourth column
        $('#picturesBoxTypeTable tr:eq(1) td:eq(6)').text(sizes.sizes.AN.desg);
        $('#picturesBoxTypeTable tr:eq(2) td:eq(6)').text(sizes.sizes.BN.desg);
        $('#picturesBoxTypeTable tr:eq(3) td:eq(6)').text(sizes.sizes.CN.desg);
        $('#picturesBoxTypeTable tr:eq(4) td:eq(6)').text(sizes.sizes.DN.desg);
        $('#picturesBoxTypeTable tr:eq(5) td:eq(6)').text(sizes.sizes.EN.desg);
        $('#picturesBoxTypeTable tr:eq(6) td:eq(6)').text(sizes.sizes.FN.desg);

        //Fill fifth column
        $('#picturesBoxTypeTable tr:eq(1) td:eq(7)').text(sizes.sizes.AN.material);
        $('#picturesBoxTypeTable tr:eq(2) td:eq(7)').text(sizes.sizes.BN.material);
        $('#picturesBoxTypeTable tr:eq(3) td:eq(7)').text(sizes.sizes.CN.material);
        $('#picturesBoxTypeTable tr:eq(4) td:eq(7)').text(sizes.sizes.DN.material);
        $('#picturesBoxTypeTable tr:eq(5) td:eq(7)').text(sizes.sizes.EN.material);
        $('#picturesBoxTypeTable tr:eq(6) td:eq(7)').text(sizes.sizes.FN.material);
    });


    $("[name='picturesBoxL']").on('change', function () {
        picturedCalc.setL(this.value);
    });

    $("[name='picturesBoxW']").on('change', function () {
        picturedCalc.setW(this.value);
    });

    $("[name='picturesBoxH']").on('change', function () {
        picturedCalc.setH(this.value);
    });

    $("[name='picturesBoxS1']").on('change', function () {
        picturedCalc.setS1(this.value);
    });

    $("[name='picturesBoxS2']").on('change', function () {
        picturedCalc.setS2(this.value);
    });

    $("[name='picturesBoxS3']").on('change', function () {
        picturedCalc.setS3(this.value);
    });

    $('[name="createPicturesOrder"]').on('submit', function () {
        picturedCalc.setL(parseInt($("[name='picturesBoxL']").val()));
        picturedCalc.setW(parseInt($("[name='picturesBoxW']").val()));
        picturedCalc.setH(parseInt($("[name='picturesBoxH']").val()));

        picturedCalc.setS1(JSON.parse($("[name='picturesBoxS1']").val()));
        picturedCalc.setS2(JSON.parse($("[name='picturesBoxS2']").val()));
        picturedCalc.setS3(JSON.parse($("[name='picturesBoxS3']").val()));

        $("[name='sizes']:last()").attr('value', picturedCalc.getSizes());
    });

</script>

