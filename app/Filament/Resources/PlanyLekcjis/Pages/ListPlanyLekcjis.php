<?php

namespace App\Filament\Resources\PlanyLekcjis\Pages;

use App\Filament\Resources\PlanyLekcjis\PlanyLekcjiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlanyLekcjis extends ListRecords
{
    protected static string $resource = PlanyLekcjiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
