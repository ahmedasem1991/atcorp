<?php

namespace App\Filament\Resources\AboutLicenseResource\Pages;

use App\Filament\Resources\AboutLicenseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutLicense extends EditRecord
{
    protected static string $resource = AboutLicenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
