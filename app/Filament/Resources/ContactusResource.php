<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactusResource\Pages;
use App\Filament\Resources\ContactusResource\RelationManagers;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactusResource extends Resource
{
    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'ContactUs';
    protected static ?string $pluralModelLabel = 'ContactUs';





    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->sortable(),
                TextColumn::make('email')->label('Email')->sortable(),
                TextColumn::make('message')->label('Message')->sortable(),
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
            'index' => Pages\ListContactuses::route('/'),
            'create' => Pages\CreateContactus::route('/create'),
            'edit' => Pages\EditContactus::route('/{record}/edit'),
        ];
    }
}
