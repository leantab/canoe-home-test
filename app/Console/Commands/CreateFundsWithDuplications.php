<?php

namespace App\Console\Commands;

use App\Models\Fund;
use Illuminate\Console\Command;

class CreateFundsWithDuplications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-funds';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create 5 random funds with 1 duplication';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Fund::factory(5)->create();

        $lastFund = Fund::latest()->first();

        Fund::create([
            'name' => $lastFund->name,
            'fund_manager_id' => $lastFund->fund_manager_id,
            'start_year' => $lastFund->start_year,
            'alias' => $lastFund->alias,
            'created_at' => now(),
        ]);
    }
}
