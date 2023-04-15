<?php

namespace Database\Factories;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    protected $model = Vote::class;

    public function definition()
    {
        return [
            'title' => fake()->title(),
            'text' => fake()->text(128),
            'img' => fake()->imageUrl(),
            'positive' => rand(0, 132),
            'negative' => rand(0, 132)
        ];
    }
}
