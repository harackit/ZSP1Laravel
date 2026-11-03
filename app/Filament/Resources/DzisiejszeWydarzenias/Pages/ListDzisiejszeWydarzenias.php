<?php

namespace App\Filament\Resources\DzisiejszeWydarzenias\Pages;

use App\Filament\Resources\DzisiejszeWydarzenias\DzisiejszeWydarzeniaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDzisiejszeWydarzenias extends ListRecords
{
    protected static string $resource = DzisiejszeWydarzeniaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
