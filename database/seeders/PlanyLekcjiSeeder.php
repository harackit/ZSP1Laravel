<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanyLekcji;

class PlanyLekcjiSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

        PlanyLekcji::fillAndInsert([
            [
                'klasa' => 'VTI',
                'url_zdjecia' => 'img/plany/VTI.png',
            ],
            [
                'klasa' => 'VTE',
                'url_zdjecia' => 'img/plany/CSB3cck5pxmZKfbB35y1RImj9kFNwWo2onStOLiN.bmp',
            ]
        ]);
    }
}
