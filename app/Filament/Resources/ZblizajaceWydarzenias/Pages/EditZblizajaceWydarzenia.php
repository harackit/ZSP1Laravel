<?php

namespace App\Filament\Resources\ZblizajaceWydarzenias\Pages;

use App\Filament\Resources\ZblizajaceWydarzenias\ZblizajaceWydarzeniaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditZblizajaceWydarzenia extends EditRecord
{
    protected static string $resource = ZblizajaceWydarzeniaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
