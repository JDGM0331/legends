@extends('layouts.master')

@section('content')

    <input type="hidden" name="game_id" id="game_id" value="2">

    <div class="row">
        <div class="col-4 text-center">
            <h1>{{ $player->name }}</h1>
            @if ($game->player_id == $player->id)
                <h3>Administrador</h3>
                <h1>{{ $game->code }}</h1>
                <a href="{{ route('startGame',$game->id) }}">
                    <input type="button" value="Iniciar" id="btnIniciar" disabled>
                </a>
            @else
                <h3>Invitado</h3>
                <h1>{{ $game->code }}</h1>
            @endif
        </div>
        <div class="col-8">
            <div id="listPlayers">
                <input type="hidden" id="numPlayers" value="{{ count($players) }}">
                <input type="hidden" id="statusGame" value="{{ $game->status }}">
                @foreach ($players as $p)
                    <div class="col-6">
                        <h1>{{ $p->name }}</h1>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        setInterval(ajaxCall, 1000); //300000 MS == 5 minutes

        function ajaxCall() {
            $.ajaxSetup({
                    headers:     {
                        'X-CSRF-TOKE': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "get",
                    url: 'http://127.0.0.1:8000/playersAjax/'+$('#game_id').val(),
                    data: {}
                })
                .done(function(html){
                    $("#listPlayers").html(html);
                });
                if($('#numPlayers').val() < 2){
                    $('#btnIniciar').prop('disabled', true);
                }else{
                    $('#btnIniciar').removeAttr('disabled');
                };
                if($('#numPlayers').val() == 7 || $('#statusGame').val()=='active'){
                    window.location.href = "{{ route('home') }}";
                };

        }
    </script>
@endsection
