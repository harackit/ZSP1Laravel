<?php

namespace App\Filament\Resources\Wydarzenias\Pages;

use App\Filament\Resources\Wydarzenias\WydarzeniaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWydarzenias extends ListRecords
{
    protected static string $resource = WydarzeniaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
