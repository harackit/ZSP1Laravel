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
                'zdjecia' => ['img/wydarzenia/zsp2.jpg', 'img/wydarzenia/zsp5.jpg'],
                'opis_wydarzenia' => 'a',
                'dodano_w_dniu' => today('Europe/Warsaw')->toDateString(),
            ],
            [
                'zdjecia' => ['img/wydarzenia/zsp1.jpg', 'img/wydarzenia/zsp4.jpg'],
                'opis_wydarzenia' => 'b',
                'dodano_w_dniu' => today('Europe/Warsaw')->toDateString(),
            ],
            [
                'zdjecia' => ['img/wydarzenia/zsp3.jpg', 'img/wydarzenia/zsp6.jpg'],
                'opis_wydarzenia' => 'c',
                'dodano_w_dniu' => today('Europe/Warsaw')->toDateString(),
            ]
        ]);
    }
}
