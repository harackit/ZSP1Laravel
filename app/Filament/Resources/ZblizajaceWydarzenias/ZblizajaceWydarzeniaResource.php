<?php

namespace App\Filament\Resources\ZblizajaceWydarzenias;

use App\Filament\Resources\ZblizajaceWydarzenias\Pages\CreateZblizajaceWydarzenia;
use App\Filament\Resources\ZblizajaceWydarzenias\Pages\EditZblizajaceWydarzenia;
use App\Filament\Resources\ZblizajaceWydarzenias\Pages\ListZblizajaceWydarzenias;
use App\Filament\Resources\ZblizajaceWydarzenias\Schemas\ZblizajaceWydarzeniaForm;
use App\Filament\Resources\ZblizajaceWydarzenias\Tables\ZblizajaceWydarzeniasTable;
use App\Models\ZblizajaceWydarzenia;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ZblizajaceWydarzeniaResource extends Resource
{
    protected static ?string $model = ZblizajaceWydarzenia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeEuropeAfrica;

    protected static string|UnitEnum|null $navigationGroup = "Dane na stronie";

    protected static ?string $recordTitleAttribute = 'nazwa_wydarzenia';

    protected static ?int $navigationSort = 2;

    // zmiana z 'zblizajaceWydarzeniaS' na forme pojedyncza bo laravel automatycznie probuje zrobic liczbe mnoga dodajac -s na koncu
    // zmiana wizualna w URL i w admin panelu, w kodzie wciaz uzywana wersja z -s na koncu (niestety)
    protected static ?string $modelLabel = 'Wydarzenie';
    protected static ?string $pluralModelLabel = 'Wydarzenia';
    protected static ?string $slug = 'zblizajace-wydarzenia';

    public static function form(Schema $schema): Schema
    {
        return ZblizajaceWydarzeniaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ZblizajaceWydarzeniasTable::configure($table);
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
            'index' => ListZblizajaceWydarzenias::route('/'),
            'create' => CreateZblizajaceWydarzenia::route('/create'),
            'edit' => EditZblizajaceWydarzenia::route('/{record}/edit'),
        ];
    }
}
