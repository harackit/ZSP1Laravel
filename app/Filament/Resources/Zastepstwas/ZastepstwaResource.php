<?php

namespace App\Filament\Resources\Zastepstwas;

use App\Filament\Resources\Zastepstwas\Pages\CreateZastepstwa;
use App\Filament\Resources\Zastepstwas\Pages\EditZastepstwa;
use App\Filament\Resources\Zastepstwas\Pages\ListZastepstwas;
use App\Filament\Resources\Zastepstwas\Schemas\ZastepstwaForm;
use App\Filament\Resources\Zastepstwas\Tables\ZastepstwasTable;
use App\Models\Zastepstwa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ZastepstwaResource extends Resource
{
    protected static ?string $model = Zastepstwa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // zmiana z 'zastepstwaS' na forme pojedyncza bo laravel automatycznie probuje zrobic liczbe mnoga dodajac -s na koncu
    // zmiana wizualna w URL i w admin panelu, w kodzie wciaz uzywana wersja z -s na koncu (niestety)
    protected static ?string $modelLabel = 'Zastępstwo';
    protected static ?string $pluralModelLabel = 'Zastępstwa';
    protected static ?string $slug = 'zastepstwa';

    public static function form(Schema $schema): Schema
    {
        return ZastepstwaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ZastepstwasTable::configure($table);
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
            'index' => ListZastepstwas::route('/'),
            'create' => CreateZastepstwa::route('/create'),
            'edit' => EditZastepstwa::route('/{record}/edit'),
        ];
    }
}
