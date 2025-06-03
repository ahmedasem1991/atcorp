<?php

namespace App\Filament\Resources\AboutLicenseResource\Pages;

use App\Filament\Resources\AboutLicenseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutLicenses extends ListRecords
{
    protected static string $resource = AboutLicenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
