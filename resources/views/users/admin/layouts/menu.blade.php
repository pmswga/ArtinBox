
<div class="ui vertical menu" style="width: 100%">
    <div class="item">
        <div class="header"><h2>Администратор</h3></div>
        <div class="ui vertical buttons" style="width: 100%;">
            <a href="{{ route('admin.index') }}" class="ui button" style="margin-bottom: 15px">Все заявки</a>
            <a href="{{ route('admin.production') }}" class="ui button" style="margin-bottom: 15px">В производстве</a>
            <a href="{{ route('admin.archive') }}" class="ui button" style="margin-bottom: 15px">Архив</a>
            <a href="{{ route('admin.create') }}" class="ui button" style="margin-bottom: 15px">Создать новый</a>
        </div>
    </div>
</div>