<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnologyAboutResource\Pages;
use App\Filament\Resources\TechnologyAboutResource\RelationManagers;
use App\Models\TechnologyAbout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\TextColumn;

class TechnologyAboutResource extends Resource
{
    protected static ?string $model = TechnologyAbout::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->required()
                ->rows(6),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('description')->limit(60),
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
            'index' => Pages\ListTechnologyAbouts::route('/'),
            'create' => Pages\CreateTechnologyAbout::route('/create'),
            'edit' => Pages\EditTechnologyAbout::route('/{record}/edit'),
        ];
    }
}
