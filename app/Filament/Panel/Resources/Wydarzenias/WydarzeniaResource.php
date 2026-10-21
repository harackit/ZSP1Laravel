<?php

namespace App\Filament\Panel\Resources\Wydarzenias;

use App\Filament\Panel\Resources\Wydarzenias\Pages\CreateWydarzenia;
use App\Filament\Panel\Resources\Wydarzenias\Pages\EditWydarzenia;
use App\Filament\Panel\Resources\Wydarzenias\Pages\ListWydarzenias;
use App\Filament\Panel\Resources\Wydarzenias\Schemas\WydarzeniaForm;
use App\Filament\Panel\Resources\Wydarzenias\Tables\WydarzeniasTable;
use App\Models\Wydarzenia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WydarzeniaResource extends Resource
{
    protected static ?string $model = Wydarzenia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'opis_wydarzenia';

    // zmiana z 'wydarzeniaS' na forme pojedyncza bo laravel automatycznie probuje zrobic liczbe mnoga dodajac -s na koncu
    // zmiana wizualna w URL i w admin panelu, w kodzie wciaz uzywana wersja z -s na koncu (niestety)
    protected static ?string $modelLabel = 'Wydarzenie';
    protected static ?string $pluralModelLabel = 'Wydarzenia';
    protected static ?string $slug = 'wydarzenia';

    public static function form(Schema $schema): Schema
    {
        return WydarzeniaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WydarzeniasTable::configure($table);
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
            'index' => ListWydarzenias::route('/'),
            'create' => CreateWydarzenia::route('/create'),
            'edit' => EditWydarzenia::route('/{record}/edit'),
        ];
    }
}
