<?php

namespace App\Filament\Resources\MessageFromCeoResource\Pages;

use App\Filament\Resources\MessageFromCeoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMessageFromCeo extends EditRecord
{
    protected static string $resource = MessageFromCeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
