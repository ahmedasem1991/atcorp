<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TradingVisionResource\Pages;
use App\Filament\Resources\TradingVisionResource\RelationManagers;
use App\Models\TradingVision;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
class TradingVisionResource extends Resource
{
    protected static ?string $navigationGroup = 'Trading';

    protected static ?string $model = TradingVision::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->required(),

            FileUpload::make('image')
                ->directory('trading-vision')
                ->image()
                ->imagePreviewHeight('100')
                ->maxSize(2048), // 2MB
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('description')->limit(50),
                ImageColumn::make('image')->circular(),
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
            'index' => Pages\ListTradingVisions::route('/'),
            'create' => Pages\CreateTradingVision::route('/create'),
            'edit' => Pages\EditTradingVision::route('/{record}/edit'),
        ];
    }
}
