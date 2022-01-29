<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dream;

class DreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dream::factory()
        ->count(30)
        ->create();
    }
}
