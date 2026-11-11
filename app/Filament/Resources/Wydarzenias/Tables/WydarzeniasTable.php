<?php

namespace App\Filament\Resources\Wydarzenias\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WydarzeniasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('opis_wydarzenia')
                    ->searchable(),
                ImageColumn::make('zdjecia')
                    ->state(fn ($record) => [$record->zdjecia[0], $record->zdjecia[1]] ?? null) // pokazuje tylko dwa pierwsze zdjecia w panelu
                    ->label("Zdjęcia")
                    ->disk('public')
                    ->imageHeight(150)
                    ->grow(false),
                TextColumn::make('dodano_w_dniu'),
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
