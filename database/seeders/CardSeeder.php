<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Card::create([
            'code' => '1A', 'image' => 'card1a', 'name' => 'Tarjeta1', 'life' => 60,
            'attack' => 70, 'resistance' => 80, 'defense' => 90
        ]);
        Card::create([
            'code' => '2A', 'image' => 'card2a', 'name' => 'Tarjeta2', 'life' => 66,
            'attack' => 77, 'resistance' => 88, 'defense' => 99
        ]);

    }
}
