<?php

namespace App\Filament\Resources\DzisiejszeWydarzenias\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class DzisiejszeWydarzeniaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make('dane')
                    ->schema([
                        TimePicker::make('godzina')->seconds(false)->required(),
                        TextInput::make('nazwa')->required(),
                    ])
                    ->columns(2)
            ]);
    }
}
