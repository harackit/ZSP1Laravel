<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DzisiejszeWydarzenia;

class DzisiejszeWydarzeniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DzisiejszeWydarzenia::fillAndInsert([
            [
                'dane' => [
                    ['godzina' => '9:30', 'nazwa' => 'konkurs'],
                    ['godzina' => '12:00', 'nazwa' => 'wyniki']
                ],
                'dzien_wydarzenia' => today('Europe/Warsaw'),
            ],
        ]);
    }
}
