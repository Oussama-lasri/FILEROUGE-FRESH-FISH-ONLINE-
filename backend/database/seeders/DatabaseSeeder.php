<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fish;
use App\Models\User;

use App\Models\BuyBy;
use App\Models\Customer;
use App\Models\categorie;
use App\Models\Recepie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            Customer::factory(10)->create();
            BuyBy::factory(10)->create();
            categorie::factory(10)->create();
            Fish::factory(10)->create();
            Recepie::factory(10)->create();
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
