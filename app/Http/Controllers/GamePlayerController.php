<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GamePlayer;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamePlayerController extends Controller
{
    public function players($idGame, $idPlayer){
        $players = GamePlayer::where('game_id', $idGame)->join('players', 'players.id', '=', 'game_players.player_id')->get();
        $game = Game::find($idGame);
        $player = Player::find($idPlayer);
        return view('lobby')->with('players',$players)->with('game',$game)->with('player',$player);
    }

    public function playersAjax($idGame){
        $players = GamePlayer::where('game_id',$idGame)->join('players', 'players.id', '=', 'game_players.player_id')->get();
        $game = Game::find($idGame);
        return view('ajax.players')->with('players',$players)->with('game',$game);
    }
}
