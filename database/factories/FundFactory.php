<?php

namespace Database\Factories;

use App\Models\FundManager;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fund>
 */
class FundFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Fund ' . fake()->numberBetween(1, 9999),
            'fund_manager_id' => FundManager::inRandomOrder()->first()->id,
            'start_year' => fake()->year(),
            'alias' => Str::random(3) .','. Str::random(4) .','. Str::random(5),
        ];
    }
}
