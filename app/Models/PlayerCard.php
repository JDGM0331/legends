<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerCard extends Model
{
    use HasFactory;

    public function gamePlayer(){
        return $this->belongsTo(GamePlayer::class);
    }

    public function card(){
        return $this->belongsTo(Card::class);
    }
}
