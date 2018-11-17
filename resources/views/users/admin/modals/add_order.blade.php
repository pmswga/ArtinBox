<form method="POST">
    @csrf

    <div class="ui modal" id="addOrderModal">
        <div class="header">
            Создать заявку
        </div>
        <div class="content">
            <div class="ui form">
            <div class="field">
                        <label>Тип ящика</label>
                        <select name="box_type">
                            <option value="1">Живописный</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Дата создания заявки</label>
                        <input type="email">
                    </div>
                    <div class="field">
                        <label>Автор заявки</label>
                        <input type="text" value="Author">
                    </div>
                    <div class="field">
                        <label>Статус</label>
                        <select name="status_type" readonly>
                            <option value="1">В производстве</option>
                        </select>
                    </div>
                    <div class="field">
                        <input type="submit" class="ui primary button">
                    </div>
            
            </div>
        </div>
        <div class="actions">
            <input type="submit" class="ui primary button" value="Создать">
        </div>
    </div>
</form>