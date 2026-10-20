<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zastepstwa;

class ZastepstwaSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Zastepstwa::fillAndInsert([
            [
                'dzien_zastepstwa' => '2026-10-21',
                'url_zdjecia' => 'img/zastepstwa/zastepstwo1.png',
            ],
            [
                'dzien_zastepstwa' => '2026-10-22',
                'url_zdjecia' => 'img/zastepstwa/zastepstwo2.png',
            ],
            [
                'dzien_zastepstwa' => '2026-10-23',
                'url_zdjecia' => 'img/zastepstwa/zastepstwo1.png'
            ],
        ]);
    }
}
