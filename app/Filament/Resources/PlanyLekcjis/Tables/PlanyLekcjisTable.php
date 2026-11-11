<?php

namespace App\Filament\Resources\PlanyLekcjis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PlanyLekcjisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    TextColumn::make('klasa')
                        ->searchable(),
                    ImageColumn::make('url_zdjecia')
                        ->label("Zdjęcie")
                        ->disk('public')
                        ->imageHeight(200),
                ])
            ])
            ->contentGrid(['md' => 1, 'lg' => '2'])
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
