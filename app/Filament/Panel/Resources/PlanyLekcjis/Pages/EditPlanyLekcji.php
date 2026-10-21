<?php

namespace App\Filament\Panel\Resources\PlanyLekcjis\Pages;

use App\Filament\Panel\Resources\PlanyLekcjis\PlanyLekcjiResource;
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
