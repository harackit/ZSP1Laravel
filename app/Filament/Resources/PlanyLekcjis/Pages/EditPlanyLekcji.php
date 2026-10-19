<?php

namespace App\Filament\Resources\PlanyLekcjis\Pages;

use App\Filament\Resources\PlanyLekcjis\PlanyLekcjiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlanyLekcji extends EditRecord
{
    protected static string $resource = PlanyLekcjiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
