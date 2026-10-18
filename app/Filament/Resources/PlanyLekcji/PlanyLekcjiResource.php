<?php

namespace App\Filament\Resources\PlanyLekcji;

use App\Filament\Resources\PlanyLekcji\Pages\CreatePlanyLekcji;
use App\Filament\Resources\PlanyLekcji\Pages\EditPlanyLekcji;
use App\Filament\Resources\PlanyLekcji\Pages\ListPlanyLekcji;
use App\Filament\Resources\PlanyLekcji\Schemas\PlanyLekcjiForm;
use App\Filament\Resources\PlanyLekcji\Tables\PlanyLekcjiTable;
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

    public static function form(Schema $schema): Schema
    {
        return PlanyLekcjiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlanyLekcjiTable::configure($table);
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
            'index' => ListPlanyLekcji::route('/'),
            'create' => CreatePlanyLekcji::route('/create'),
            'edit' => EditPlanyLekcji::route('/{record}/edit'),
        ];
    }
}
