<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dream;
use App\Models\Keyword;

class DreamkeywordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "dream_id" => Dream::factory(),
            "keyword_id" => Keyword::factory()
        ];
    }
}
