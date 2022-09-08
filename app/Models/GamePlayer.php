<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlayer extends Model
{
    use HasFactory;

    public function game(){
        return $this->belongsTo(Game::class,'player_id');
    }

    public function player(){
        return $this->belongsTo(Player::class);
    }

    public function playerCards(){
        return $this->hasMany(PlayerCard::class);
    }
}
