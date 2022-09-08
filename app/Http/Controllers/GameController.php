<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function startGame($idGame){
        $game = Game::find($idGame);
        $game->status = 'active';
        $game->save();
        return view('welcome');
    }
}
