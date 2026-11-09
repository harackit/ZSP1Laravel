<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

class DatySwiat extends Page
{
    protected string $view = 'filament.pages.daty-swiat';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-calendar';
    
    protected static ?string $slug = "dni-swiat";
    protected static ?string $title = "Dni świąt";

    public array $data = [];

    private const plik_json = 'datySwiat.json';

    public function mount(): void {

        if(Storage::disk('public')->exists(self::plik_json)) {
            $daty_swiat = json_decode(Storage::disk('public')->get(self::plik_json), true, 512, JSON_THROW_ON_ERROR);
        }
        else {
            $daty_swiat = [];
        }

        $this->form->fill($daty_swiat);
    }

    public function form(Schema $schema): Schema {
        return $schema
            ->components([
                Form::make([
                    DatePicker::make('dzien_nauczyciela')
                        ->format('Y-m-d')
                        ->required()
                        ->label("Dzień nauczyciela"),
                    DatePicker::make('przerwa_swiateczna')
                        ->format('Y-m-d')
                        ->required()
                        ->label("Przerwa świąteczna"),
                    DatePicker::make('ferie')
                        ->format('Y-m-d')
                        ->required()
                        ->label("Ferie"),
                    DatePicker::make('wielkanoc')
                        ->format('Y-m-d')
                        ->required()
                        ->label("Wielkanoc"),
                    DatePicker::make('koniec_maturzysci')
                        ->format('Y-m-d')
                        ->required()
                        ->label("Koniec roku dla maturzystów"),
                    DatePicker::make('koniec_roku_szkolnego')
                        ->format('Y-m-d')
                        ->required()
                        ->label("Koniec roku szkolnego"),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('Zapisz')->submit('save'),
                        ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void {

        $daty_swiat = $this->form->getState();

        Storage::disk('public')->put(self::plik_json, json_encode($daty_swiat, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR));

        Notification::make()
            ->success()
            ->title('Zapisano')
            ->send();
    }
}
