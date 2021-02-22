<?php

namespace Database\Seeders;

use App\Models\Music;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Product::factory(30)->create();
        Music::factory(30)->create();
    }
}
