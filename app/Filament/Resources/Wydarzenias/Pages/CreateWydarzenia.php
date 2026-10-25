<?php

namespace App\Filament\Resources\Wydarzenias\Pages;

use App\Filament\Resources\Wydarzenias\WydarzeniaResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateWydarzenia extends CreateRecord
{
    protected static string $resource = WydarzeniaResource::class;

    #[Override]
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['dodano_w_dniu'] = today('Europe/Warsaw')->toDateTime();

        return $data;
    }
}