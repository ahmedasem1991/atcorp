<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutLicenseResource\Pages;
use App\Filament\Resources\AboutLicenseResource\RelationManagers;
use App\Models\AboutLicense;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutLicenseResource extends Resource
{
    protected static ?string $navigationGroup = 'AboutUs';

    protected static ?string $model = AboutLicense::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->required()
                ->maxLength(255),
            FileUpload::make('image')   
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->sortable(),
                ImageColumn::make('image')  // Displays the image field
                ->label('Image')
                ->disk('public')  // Ensure the image is served from the public disk
                ->size(100)  // Adjust the size of the image displayed in the table
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutLicenses::route('/'),
            'create' => Pages\CreateAboutLicense::route('/create'),
            'edit' => Pages\EditAboutLicense::route('/{record}/edit'),
        ];
    }
}
