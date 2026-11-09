<?php

namespace Database\Seeders;

use App\Models\Informacje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformacjeSeeder extends Seeder
{
    public function run(): void
    {
        Informacje::fillAndInsert([
            [
                'wazne_informacje' => "MATURY!!!!!",
            ],
        ]);
    }
}
