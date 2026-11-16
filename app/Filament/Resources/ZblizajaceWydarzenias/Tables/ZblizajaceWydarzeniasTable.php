<?php

namespace App\Filament\Resources\ZblizajaceWydarzenias\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ZblizajaceWydarzeniasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nazwa_wydarzenia')
                    ->searchable(),
                TextColumn::make('dzien_czas_wydarzenia')
                    ->date('d F Y')
                    ->label('Dzień')
                    ->sortable(),
                TextColumn::make('czas_wydarzenia')
                    ->getStateUsing(fn ($record) => $record->dzien_czas_wydarzenia)
                    ->time('H:i')
                    ->label('Godzina'),
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
