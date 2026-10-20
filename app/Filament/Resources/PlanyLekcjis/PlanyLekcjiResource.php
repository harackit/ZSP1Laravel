<?php

namespace App\Filament\Resources\PlanyLekcjis;

use App\Filament\Resources\PlanyLekcjis\Pages\CreatePlanyLekcji;
use App\Filament\Resources\PlanyLekcjis\Pages\EditPlanyLekcji;
use App\Filament\Resources\PlanyLekcjis\Pages\ListPlanyLekcjis;
use App\Filament\Resources\PlanyLekcjis\Schemas\PlanyLekcjiForm;
use App\Filament\Resources\PlanyLekcjis\Tables\PlanyLekcjisTable;
use App\Models\PlanyLekcji;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlanyLekcjiResource extends Resource
{
    protected static ?string $model = PlanyLekcji::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'klasa';

    // zmiana z 'plany lekcjiS' na forme pojedyncza bo laravel automatycznie probuje zrobic liczbe mnoga dodajac -s na koncu
    // zmiana wizualna w URL i w admin panelu, w kodzie wciaz uzywana wersja z -s na koncu (niestety)
    protected static ?string $modelLabel = 'Plan lekcji';
    protected static ?string $pluralModelLabel = 'Plany lekcji';
    protected static ?string $slug = 'plany-lekcji';

    public static function form(Schema $schema): Schema
    {
        return PlanyLekcjiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlanyLekcjisTable::configure($table);
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
            'index' => ListPlanyLekcjis::route('/'),
            'create' => CreatePlanyLekcji::route('/create'),
            'edit' => EditPlanyLekcji::route('/{record}/edit'),
        ];
    }
}
