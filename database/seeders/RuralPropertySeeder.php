<?php

namespace Database\Seeders;

use App\Models\RuralProperty;
use Illuminate\Database\Seeder;
use Database\Factories\RuralPropertyFactory;

class RuralPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RuralProperty::factory(20)->create();
    }
}
