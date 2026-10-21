<?php

namespace App\Filament\Panel\Resources\Zastepstwas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ZastepstwaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('dzien_zastepstwa'),
                FileUpload::make('url_zdjecia')
                    ->image()
                    ->disk('public')
                    ->directory('img/zastepstwa'),
            ]);
    }
}
