<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::fillAndInsert(
            [
                [
                    'name' => 'Test',
                    'email' => 'test@localhost.local',
                    'is_admin' => 0,
                    'password' => 'qwe123',
                ],
                [
                    'name' => 'AdminTest',
                    'email' => 'admin@localhost.local',
                    'is_admin' => 1,
                    'password' => 'qwe123',
                ]
            ]);

        $this->call([
            WydarzeniaSeeder::class,
            PlanyLekcjiSeeder::class,
            ZastepstwaSeeder::class,
        ]);
    }
}
