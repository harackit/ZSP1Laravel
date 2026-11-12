<?php

namespace App\Filament\Resources\Zastepstwas\Pages;

use App\Filament\Resources\Zastepstwas\ZastepstwaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class ListZastepstwas extends ListRecords
{
    protected static string $resource = ZastepstwaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array {
        return [
            'wszystkie' => Tab::make()
                ->icon(Heroicon::Bars3),
            'dzisiaj' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('dzien_zastepstwa', today('Europe/Warsaw'))),
            'jutro' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('dzien_zastepstwa', today('Europe/Warsaw')->addDays(1))),
            'inne' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('dzien_zastepstwa', '!=', today('Europe/Warsaw'))->where('dzien_zastepstwa', '!=', today('Europe/Warsaw')->addDays(1))),
        ];
    }
}
