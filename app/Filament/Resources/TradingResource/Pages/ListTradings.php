<?php

namespace App\Filament\Resources\TradingResource\Pages;

use App\Filament\Resources\TradingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTradings extends ListRecords
{
    protected static string $resource = TradingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
