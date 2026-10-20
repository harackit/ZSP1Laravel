<?php

namespace App\Filament\Resources\Wydarzenias\Pages;

use App\Filament\Resources\Wydarzenias\WydarzeniaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWydarzenia extends EditRecord
{
    protected static string $resource = WydarzeniaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
