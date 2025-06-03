<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageFromCeoResource\Pages;
use App\Filament\Resources\MessageFromCeoResource\RelationManagers;
use App\Models\MessageFromCeo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class MessageFromCeoResource extends Resource
{
    protected static ?string $navigationGroup = 'Home Page';

    protected static ?string $model = MessageFromCeo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('ceo_name')->required(),
                Textarea::make('message')->required(),
                FileUpload::make('image')->image()->directory('ceo-images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ceo_name'),
                TextColumn::make('message')->limit(50),
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
            'index' => Pages\ListMessageFromCeos::route('/'),
            'create' => Pages\CreateMessageFromCeo::route('/create'),
            'edit' => Pages\EditMessageFromCeo::route('/{record}/edit'),
        ];
    }
}
