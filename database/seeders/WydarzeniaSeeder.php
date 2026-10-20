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

        Wydarzenia::fillAndInsert([
            [
                'url_zdjecia' => 'img/wydarzenia/placeholder.svg',
                'opis_wydarzenia' => 'a'
            ],
            [
                'url_zdjecia' => 'img/wydarzenia/placeholder2.jpg',
                'opis_wydarzenia' => 'b'
            ],
            [
                'url_zdjecia' => 'img/wydarzenia/placeholder3.jpg',
                'opis_wydarzenia' => 'c'
            ]
        ]);
    }
}
