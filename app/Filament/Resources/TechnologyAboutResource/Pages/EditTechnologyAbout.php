<?php

namespace App\Filament\Resources\TechnologyAboutResource\Pages;

use App\Filament\Resources\TechnologyAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnologyAbout extends EditRecord
{
    protected static string $resource = TechnologyAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
