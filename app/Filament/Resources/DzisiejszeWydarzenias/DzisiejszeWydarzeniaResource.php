<?php

namespace App\Filament\Resources\DzisiejszeWydarzenias;

use App\Filament\Resources\DzisiejszeWydarzenias\Pages\CreateDzisiejszeWydarzenia;
use App\Filament\Resources\DzisiejszeWydarzenias\Pages\EditDzisiejszeWydarzenia;
use App\Filament\Resources\DzisiejszeWydarzenias\Pages\ListDzisiejszeWydarzenias;
use App\Filament\Resources\DzisiejszeWydarzenias\Schemas\DzisiejszeWydarzeniaForm;
use App\Filament\Resources\DzisiejszeWydarzenias\Tables\DzisiejszeWydarzeniasTable;
use App\Models\DzisiejszeWydarzenia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DzisiejszeWydarzeniaResource extends Resource
{
    protected static ?string $model = DzisiejszeWydarzenia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nazwa_wydarzenia';

    public static function form(Schema $schema): Schema
    {
        return DzisiejszeWydarzeniaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DzisiejszeWydarzeniasTable::configure($table);
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
            'index' => ListDzisiejszeWydarzenias::route('/'),
            'create' => CreateDzisiejszeWydarzenia::route('/create'),
            'edit' => EditDzisiejszeWydarzenia::route('/{record}/edit'),
        ];
    }
}
