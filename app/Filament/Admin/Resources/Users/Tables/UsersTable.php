<?php

namespace App\Filament\Admin\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label("Nazwa"),
                TextColumn::make('email')
                    ->label("E-Mail"),
                TextColumn::make('is_admin')
                    ->label("Rola")
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        '1' => 'Administrator',
                        '0' => 'Użytkownik',
                        default => 'Inna rola',
                    }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

}
