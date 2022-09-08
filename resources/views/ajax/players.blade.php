
<input type="hidden" id="numPlayers" value="{{ count($players) }}">
<input type="hidden" id="statusGame" value="{{ $game->status }}">
@foreach ($players as $p)
    <div class="col-6">
        <h1>{{ $p->name }}</h1>
    </div>
@endforeach
