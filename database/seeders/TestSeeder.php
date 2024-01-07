<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Fund;
use App\Models\FundManager;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(2)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        FundManager::factory(10)->create();

        $funds = Fund::factory(25)->create();

        Company::factory(50)->create();

        $funds->each(function (Fund $fund) {
            $fund->companies()->attach(
                Company::inRandomOrder()->take(5)->pluck('id')->toArray()
            );
        });
    }
}
