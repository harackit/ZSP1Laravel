<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wydarzenia;

class WydarzeniaSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $dzisiaj = today('Europe/Warsaw')->toDateString();
        Wydarzenia::fillAndInsert([
            [
                'url_zdjecia' => 'img/wydarzenia/placeholder.svg',
                'opis_wydarzenia' => 'a',
                'dodano_w_dniu' => $dzisiaj,
            ],
            [
                'url_zdjecia' => 'img/wydarzenia/placeholder2.jpg',
                'opis_wydarzenia' => 'b',
                'dodano_w_dniu' => $dzisiaj,
            ],
            [
                'url_zdjecia' => 'img/wydarzenia/placeholder3.jpg',
                'opis_wydarzenia' => 'c',
                'dodano_w_dniu' => $dzisiaj,
            ]
        ]);
    }
}
