<?php

namespace App\Filament\Resources\Zastepstwas\Pages;

use App\Filament\Resources\Zastepstwas\ZastepstwaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditZastepstwa extends EditRecord
{
    protected static string $resource = ZastepstwaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
