<?php

namespace App\Repositories;

use App\Models\Fund;
use Illuminate\Support\Facades\DB;

class FundsRepository
{
    public function getFundById(int $id): Fund
    {
        return Fund::findOrFail($id);
    }

    public function getFundByName(string $name): Fund
    {
        return Fund::where('name', $name)->firstOrFail();
    }

    public function checkIfFundIsDuplicated(Fund $fund): bool
    {
        $query = DB::select("SELECT * FROM funds 
                where (name = '$fund->name' OR alias = '$fund->alias') 
                AND fund_manager_id = $fund->fund_manager_id
                AND id != $fund->id");

        return count($query) > 0;
    }
}