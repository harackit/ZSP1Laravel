<?php

namespace App\Filament\Resources\PlanyLekcji\Pages;

use App\Filament\Resources\PlanyLekcji\PlanyLekcjiResource;
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
