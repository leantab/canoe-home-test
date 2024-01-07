<?php

namespace App\Events;

use App\Models\Fund;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class DuplicateFundWarning
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Fund $fund
    )
    {
        Log::info('DuplicateFundWarning fired');
    }
}
