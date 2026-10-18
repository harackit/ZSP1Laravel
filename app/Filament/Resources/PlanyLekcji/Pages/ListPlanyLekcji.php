<?php

namespace App\Filament\Resources\PlanyLekcji\Pages;

use App\Filament\Resources\PlanyLekcji\PlanyLekcjiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlanyLekcji extends ListRecords
{
    protected static string $resource = PlanyLekcjiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
