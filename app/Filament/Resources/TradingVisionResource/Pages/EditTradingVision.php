<?php

namespace App\Filament\Resources\TradingVisionResource\Pages;

use App\Filament\Resources\TradingVisionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTradingVision extends EditRecord
{
    protected static string $resource = TradingVisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
