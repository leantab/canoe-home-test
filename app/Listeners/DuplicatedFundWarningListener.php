<?php

namespace App\Listeners;

use App\Actions\MarkFundAsDuplicated;
use App\Events\DuplicateFundWarning;
use Illuminate\Support\Facades\Log;

class DuplicatedFundWarningListener
{
    public function __construct(
        private readonly MarkFundAsDuplicated $markFundAsDuplicated,
    )
    {
    }

    public function handle(DuplicateFundWarning $event): void
    {
        Log::info('DuplicatedFundWarningListener fired');
        $this->markFundAsDuplicated->__invoke($event->fund);
    }
}
