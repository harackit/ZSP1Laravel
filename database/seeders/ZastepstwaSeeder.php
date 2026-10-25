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
                'dzien_zastepstwa' => today('Europe/Warsaw')->toDateString(),
                'url_zdjecia' => 'img/zastepstwa/zastepstwo1.png',
            ],
            [
                'dzien_zastepstwa' => today('Europe/Warsaw')->addDays(1)->toDateString(),
                'url_zdjecia' => 'img/zastepstwa/zastepstwo2.png',
            ],
            [
                'dzien_zastepstwa' => today('Europe/Warsaw')->addDays(2)->toDateString(),
                'url_zdjecia' => 'img/zastepstwa/zastepstwo1.png'
            ],
        ]);
    }
}
