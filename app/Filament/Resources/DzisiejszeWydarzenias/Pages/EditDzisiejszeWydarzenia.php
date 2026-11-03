<?php

namespace App\Filament\Resources\DzisiejszeWydarzenias\Pages;

use App\Filament\Resources\DzisiejszeWydarzenias\DzisiejszeWydarzeniaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDzisiejszeWydarzenia extends EditRecord
{
    protected static string $resource = DzisiejszeWydarzeniaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
