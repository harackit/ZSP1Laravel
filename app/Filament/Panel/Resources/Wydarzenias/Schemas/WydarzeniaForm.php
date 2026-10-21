<?php

namespace App\Filament\Panel\Resources\Wydarzenias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class WydarzeniaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('opis_wydarzenia')
                    ->required(),
                FileUpload::make('url_zdjecia')
                    ->image()
                    ->disk('public')
                    ->directory('img/wydarzenia'),
            ]);
    }
}
