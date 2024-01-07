<?php

namespace App\Filament\Resources\FundManagerResource\Pages;

use App\Filament\Resources\FundManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFundManagers extends ListRecords
{
    protected static string $resource = FundManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
