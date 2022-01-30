<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keyword;
use App\Models\Dream;
use App\Models\Dreamkeyword;
use App\Models\User;

class DreamkeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dreamkeyword::factory(3)
        ->has(Dream::factory()->count(3))
        ->has(Keyword::factory()->count(3))
        ->has(User::factory()->count(3))
        ->create();
    }
}
