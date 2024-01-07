<?php

namespace App\Actions;

use App\Models\Fund;

class MarkFundAsDuplicated
{
    public function __invoke(Fund $fund): void
    {
        $fund->is_duplicated = true;
        $fund->save();
    }
}