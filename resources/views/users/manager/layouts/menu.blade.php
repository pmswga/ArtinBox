
<div class="ui vertical menu" style="width: 100%">
    <div class="item">
        <div class="header"><h2>Менеджер</h3></div>
        <div class="ui vertical buttons" style="width: 100%;">
            <a href="{{ route('manager.index') }}" class="ui button" style="margin-bottom: 15px">Все заявки</a>
            <a href="{{ route('manager.production') }}" class="ui button" style="margin-bottom: 15px">В производстве</a>
            <a href="{{ route('manager.archive') }}" class="ui button" style="margin-bottom: 15px">Архив</a>
            <a href="{{ route('manager.create') }}" class="ui button" style="margin-bottom: 15px">Создать новый</a>
        </div>
    </div>
</div>