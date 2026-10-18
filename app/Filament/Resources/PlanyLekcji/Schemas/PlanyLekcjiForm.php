<?php

namespace App\Filament\Resources\PlanyLekcji\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PlanyLekcjiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('klasa')->required(),
                TextInput::make('url_zdjecia')->required(),
            ]);
    }
}
