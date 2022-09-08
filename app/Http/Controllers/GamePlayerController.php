<?php

namespace App\Http\Controllers;

use App\Models\GamePlayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamePlayerController extends Controller
{
    public function players($game){
        $players = GamePlayer::where('game_id', $game)->join('players', 'players.id', '=', 'game_players.player_id')->get();
        return view('lobby')->with('players',$players);
    }

    public function playersAjax($game){
        $players = GamePlayer::where('game_id',$game)->join('players', 'players.id', '=', 'game_players.player_id')->get();
        return view('ajax.players')->with('players',$players);
    }
}
