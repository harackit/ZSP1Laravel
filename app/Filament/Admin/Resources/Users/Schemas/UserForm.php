<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label("Nazwa"),
                TextInput::make('email')
                    ->label("E-Mail")
                    ->required(),
                TextInput::make('password')
                    ->label("Hasło")
                    ->password(),
            ]);
    }
}
