<?php

namespace Database\Factories;

use App\TickerStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement(TickerStatusEnum::toArray()),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
