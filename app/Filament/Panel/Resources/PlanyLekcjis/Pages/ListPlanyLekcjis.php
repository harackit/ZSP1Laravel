<?php

namespace App\Filament\Panel\Resources\PlanyLekcjis\Pages;

use App\Filament\Panel\Resources\PlanyLekcjis\PlanyLekcjiResource;
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
