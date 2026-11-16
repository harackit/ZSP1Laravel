<?php

namespace App\Filament\Resources\ZblizajaceWydarzenias\Pages;

use App\Filament\Resources\ZblizajaceWydarzenias\ZblizajaceWydarzeniaResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateZblizajaceWydarzenia extends CreateRecord
{
    protected static string $resource = ZblizajaceWydarzeniaResource::class;

    #[Override]
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['dzien_czas_wydarzenia'] = implode(' ', 
            [
                $data['dzien_wydarzenia'], 
                $data['czas_wydarzenia']
            ]);

        return $data;
    }
}
