<div class="ui vertical menu" style="width: 100%">
    <div class="item">
        <div class="header"><h2>Мастер</h3></div>
        <div class="ui vertical buttons" style="width: 100%;">
            <a href="{{ route('master.index') }}" class="ui button" style="margin-bottom: 15px">В производстве ({{ $count_orders ?? 0 }})</a>
            <a href="{{ route('master.archive') }}" class="ui button" style="margin-bottom: 15px">Архив</a>
        </div>
    </div>
</div>