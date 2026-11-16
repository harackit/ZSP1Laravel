<?php

namespace App\Filament\Resources\ZblizajaceWydarzenias\Pages;

use App\Filament\Resources\ZblizajaceWydarzenias\ZblizajaceWydarzeniaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListZblizajaceWydarzenias extends ListRecords
{
    protected static string $resource = ZblizajaceWydarzeniaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
