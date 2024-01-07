<?php

namespace App\Listeners;

use App\Events\DuplicateFundWarning;
use App\Events\FundCreatedEvent;
use App\Repositories\FundsRepository;
use Illuminate\Support\Facades\Log;

class CheckFundDuplicationsListener
{
    public function __construct(
        private readonly FundsRepository $fundsRepository,
    )
    {
    }

    public function handle(FundCreatedEvent $event): void
    {
        Log::info('CheckFundDuplicationsListener fired');
        $isDulpicated = $this->fundsRepository->checkIfFundIsDuplicated($event->fund);
        Log::info('CheckFundDuplicationsListener - isDulpicated: ' . $isDulpicated);
        if ($isDulpicated) {
            DuplicateFundWarning::dispatch($event->fund);
        }
    }
}
