<?php

namespace App\Filament\Resources\Zastepstwas\Pages;

use App\Filament\Resources\Zastepstwas\ZastepstwaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListZastepstwas extends ListRecords
{
    protected static string $resource = ZastepstwaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
