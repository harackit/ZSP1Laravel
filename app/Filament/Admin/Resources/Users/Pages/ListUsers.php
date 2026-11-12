<?php

namespace App\Filament\Admin\Resources\Users\Pages;

use App\Filament\Admin\Resources\Users\UserResource;
use App\Models\User;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array {
        return [
            'wszyscy' => Tab::make()
                ->icon(Heroicon::Bars3)
                ->badge(static fn(): int => User::all()->count())
                ->deferBadge(),
            'administratorzy' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_admin', 1))
                ->icon(Heroicon::CheckBadge),
            'użytkownicy' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_admin', 0))
                ->icon(Heroicon::User),
        ];
    }
}
