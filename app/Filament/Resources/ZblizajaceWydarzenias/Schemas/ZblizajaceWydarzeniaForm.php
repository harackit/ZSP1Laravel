<?php

namespace App\Filament\Resources\ZblizajaceWydarzenias\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;


class ZblizajaceWydarzeniaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nazwa_wydarzenia')
                    ->required(),

                DateTimePicker::make('dzien_czas_wydarzenia')
                    ->label('Dzień i godzina')
                    ->seconds(false)
                    ->prefixIcon('heroicon-o-calendar')
                    ->required(),
            ]);
    }
}
