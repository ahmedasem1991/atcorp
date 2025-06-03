<?php

namespace App\Filament\Resources\MessageFromCeoResource\Pages;

use App\Filament\Resources\MessageFromCeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMessageFromCeos extends ListRecords
{
    protected static string $resource = MessageFromCeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
