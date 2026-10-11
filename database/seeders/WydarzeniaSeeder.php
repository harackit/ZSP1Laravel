<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WydarzeniaSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wydarzenia')->insert([
            [
                'url_zdjecia' => 'img/placeholder.svg',
                'opis_wydarzenia' => 'a'
            ],
            [
                'url_zdjecia' => 'img/placeholder2.jpg',
                'opis_wydarzenia' => 'b'
            ],
            [
                'url_zdjecia' => 'img/placeholder3.jpg',
                'opis_wydarzenia' => 'c'
            ]
        ]);
    }
}
