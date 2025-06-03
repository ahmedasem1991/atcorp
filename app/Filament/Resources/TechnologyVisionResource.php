<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnologyVisionResource\Pages;
use App\Filament\Resources\TechnologyVisionResource\RelationManagers;
use App\Models\TechnologyVision;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Filament\Tables\Columns\ImageColumn;


use Filament\Tables\Columns\TextColumn;
class TechnologyVisionResource extends Resource
{
    protected static ?string $model = TechnologyVision::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Textarea::make('description')->required(),
                FileUpload::make('image')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('title'),
                TextColumn::make('description')->limit(50),
                ImageColumn::make('image'),
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
            'index' => Pages\ListTechnologyVisions::route('/'),
            'create' => Pages\CreateTechnologyVision::route('/create'),
            'edit' => Pages\EditTechnologyVision::route('/{record}/edit'),
        ];
    }
}
