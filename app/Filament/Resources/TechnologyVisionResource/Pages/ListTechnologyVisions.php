<?php

namespace App\Filament\Resources\TechnologyVisionResource\Pages;

use App\Filament\Resources\TechnologyVisionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnologyVisions extends ListRecords
{
    protected static string $resource = TechnologyVisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
