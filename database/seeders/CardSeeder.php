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

        /* Paquete A */

        Card::create([
            'code' => '1A', 'image' => 'card1a', 'name' => 'Aris', 'life' => 10,
            'attack' => 1, 'resistance' => 117, 'defense' => 128
        ]);

        Card::create([
            'code' => '2A', 'image' => 'card2a', 'name' => 'Bastion', 'life' => 65,
            'attack' => 2, 'resistance' => 116, 'defense' => 129
        ]);

        Card::create([
            'code' => '3A', 'image' => 'card3a', 'name' => 'Crismon', 'life' => 95,
            'attack' => 3, 'resistance' => 114, 'defense' => 131
        ]);

        Card::create([
            'code' => '4A', 'image' => 'card4a', 'name' => 'Grimlo', 'life' => 10,
            'attack' => 4, 'resistance' => 113, 'defense' => 132
        ]);

        /* Paquete B  */

        Card::create([
            'code' => '1B', 'image' => 'card1b', 'name' => 'Bronder', 'life' => 50,
            'attack' => 6, 'resistance' => 102, 'defense' => 118
        ]);

        Card::create([
            'code' => '2B', 'image' => 'card2b', 'name' => 'Agur', 'life' => 20,
            'attack' => 7, 'resistance' => 103, 'defense' => 119
        ]);

        Card::create([
            'code' => '3B', 'image' => 'card3b', 'name' => 'Bijim', 'life' => 75,
            'attack' => 8, 'resistance' => 104, 'defense' => 121
        ]);

        Card::create([
            'code' => '4B', 'image' => 'card4b', 'name' => 'Casttle', 'life' => 105,
            'attack' => 9, 'resistance' => 106, 'defense' => 122
        ]);

        /* Paquete C */

        Card::create([
            'code' => '1C', 'image' => 'card1c', 'name' => 'Corder', 'life' => 90,
            'attack' => 11, 'resistance' => 108, 'defense' => 127
        ]);

        Card::create([
            'code' => '2C', 'image' => 'card2c', 'name' => 'Bostro', 'life' => 60,
            'attack' => 12, 'resistance' => 109, 'defense' => 126
        ]);

        Card::create([
            'code' => '3C', 'image' => 'card3c', 'name' => 'Afton', 'life' => 30,
            'attack' => 13, 'resistance' => 111, 'defense' => 124
        ]);

        Card::create([
            'code' => '4C', 'image' => 'card4c', 'name' => 'Azoi', 'life' => 40,
            'attack' => 21, 'resistance' => 72, 'defense' => 81
        ]);

        /* Paquete D */

        Card::create([
            'code' => '1D', 'image' => 'card1d', 'name' => 'Dunma', 'life' => 130,
            'attack' => 16, 'resistance' => 76, 'defense' => 77
        ]);

        Card::create([
            'code' => '2D', 'image' => 'card2d', 'name' => 'Crinum', 'life' => 100,
            'attack' => 18, 'resistance' => 74, 'defense' => 78
        ]);

        Card::create([
            'code' => '3D', 'image' => 'card3d', 'name' => 'Blinn', 'life' => 70,
            'attack' => 19, 'resistance' => 73, 'defense' => 79
        ]);

        Card::create([
            'code' => '4D', 'image' => 'card4d', 'name' => 'Azoi', 'life' => 40,
            'attack' => 21, 'resistance' => 72, 'defense' => 81
        ]);

        /* Paquete E */

        Card::create([
            'code' => '1E', 'image' => 'card1e', 'name' => 'Elliot', 'life' => 170,
            'attack' => 22, 'resistance' => 67, 'defense' => 86
        ]);

        Card::create([
            'code' => '2E', 'image' => 'card2e', 'name' => 'Dosen', 'life' => 140,
            'attack' => 140, 'resistance' => 67, 'defense' => 86
        ]);

        Card::create([
            'code' => '3E', 'image' => 'card3e', 'name' => 'Cesyio', 'life' => 110,
            'attack' => 24, 'resistance' => 679, 'defense' => 86
        ]);

        Card::create([
            'code' => '4E', 'image' => 'card4e', 'name' => 'Beport', 'life' => 170,
            'attack' => 22, 'resistance' => 67, 'defense' => 86
        ]);

        /* Paquete F */

        Card::create([
            'code' => '1F', 'image' => 'card1f', 'name' => 'Farallon', 'life' => 5,
            'attack' => 27, 'resistance' => 62, 'defense' => 87
        ]);

        Card::create([
            'code' => '2F', 'image' => 'card2f', 'name' => 'Eliz', 'life' => 180,
            'attack' => 28, 'resistance' => 63, 'defense' => 88
        ]);

        Card::create([
            'code' => '3F', 'image' => 'card3f', 'name' => 'Dorma', 'life' => 150,
            'attack' => 29, 'resistance' => 64, 'defense' => 89
        ]);

        Card::create([
            'code' => '4F', 'image' => 'card4f', 'name' => 'Cazin', 'life' => 150,
            'attack' => 29, 'resistance' => 64, 'defense' => 89
        ]);

        /* Paquete  G*/

        Card::create([
            'code' => '1G', 'image' => 'card1g', 'name' => 'Grim', 'life' => 45,
            'attack' => 32, 'resistance' => 61, 'defense' => 96
        ]);

        Card::create([
            'code' => '2G', 'image' => 'card2g', 'name' => 'Forke', 'life' => 15,
            'attack' => 33, 'resistance' => 49, 'defense' => 94
        ]);

        Card::create([
            'code' => '3G', 'image' => 'card3g', 'name' => 'Emily', 'life' => 190,
            'attack' => 33, 'resistance' => 49, 'defense' => 94
        ]);

        Card::create([
            'code' => '3G', 'image' => 'card4g', 'name' => 'Emily', 'life' => 190,
            'attack' => 33, 'resistance' => 49, 'defense' => 94
        ]);

        /* Paquete H */

        Card::create([
            'code' => '1H', 'image' => 'card1h', 'name' => 'Helim', 'life' => 55,
            'attack' => 37, 'resistance' => 46, 'defense' => 97
        ]);

        Card::create([
            'code' => '2H', 'image' => 'card2h', 'name' => "Glariot", 'life' => 35,
            'attack' => 38, 'resistance' => 44, 'defense' => 98
        ]);

        Card::create([
            'code' => '3H', 'image' => 'card3h', 'name' => "Franchi", 'life' => 25,
            'attack' => 39, 'resistance' => 43, 'defense' => 99
        ]);

        Card::create([
            'code' => '4H', 'image' => 'card4h', 'name' => "Franchi", 'life' => 25,
            'attack' => 39, 'resistance' => 43, 'defense' => 99
        ]);
    }
}

