@extends('layouts.master')

@section('content')

    <input type="hidden" name="game_id" id="game_id" value="1">

    <div class="row">
        <div class="col-4 bg-info">

        </div>
        <div class="col-8 bg-success">
            <div id="listPlayers">
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
        setInterval(ajaxCall, 500); //300000 MS == 5 minutes

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
        }
    </script>
@endsection
