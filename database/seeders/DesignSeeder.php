<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Design;
use App\Models\Dream;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Design::factory(3)->has(Dream::factory()->count(3))->create();
    }
}
