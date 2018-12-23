
<div class="ui vertical menu" style="width: 100%">
    <div class="item">
        <div class="header"><h3 align="center" id="menu-title"></h3></div>
        <div class="ui vertical buttons" style="width: 100%;">
            <a href="{{ route('manager.index') }}" class="ui button" style="margin-bottom: 15px">В производстве ({{ $count_orders ?? 0 }})</a>
            <a href="{{ route('manager.archiveIndex') }}" class="ui button" style="margin-bottom: 15px">Архив</a>
            <a href="{{ route('manager.create') }}" class="ui button" style="margin-bottom: 15px">Создать новый</a>
        </div>
    </div>
</div>