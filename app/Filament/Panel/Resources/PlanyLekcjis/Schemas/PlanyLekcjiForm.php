<?php

namespace App\Filament\Panel\Resources\PlanyLekcjis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PlanyLekcjiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('klasa')
                    ->required(),
                FileUpload::make('url_zdjecia')
                    ->image()
                    ->disk('public')
                    ->directory('img/plany'),
            ]);
    }
}
