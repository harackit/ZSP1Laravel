<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ZblizajaceWydarzenia;

class ZblizajaceWydarzeniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZblizajaceWydarzenia::fillAndInsert([
            [
                'nazwa_wydarzenia' => "Pierwsze",
                'dzien_czas_wydarzenia' => now()->toDateTimeString(),
            ],
            [
                'nazwa_wydarzenia' => "Drugie",
                'dzien_czas_wydarzenia' => now()->addWeeks(2)->toDateTimeString(),
            ],
            [
                'nazwa_wydarzenia' => "Trzecie",
                'dzien_czas_wydarzenia' => now()->addMonths(1)->toDateTimeString(),
            ],
        ]);
    }
}
