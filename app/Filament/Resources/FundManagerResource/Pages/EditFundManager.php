<?php

namespace App\Filament\Resources\FundManagerResource\Pages;

use App\Filament\Resources\FundManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFundManager extends EditRecord
{
    protected static string $resource = FundManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
