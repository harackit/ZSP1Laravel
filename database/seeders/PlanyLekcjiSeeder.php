<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanyLekcjiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use WithoutModelEvents;
    public function run(): void
    {
        DB::table('plany_lekcji')->insert([
            [
                'klasa' => 'VTI',
                'url_zdjecia' => 'img/VTI.png',
            ],
            [
                'klasa' => 'VTE',
                'url_zdjecia' => 'img/CSB3cck5pxmZKfbB35y1RImj9kFNwWo2onStOLiN.bmp',
            ]
        ]);
    }
}
