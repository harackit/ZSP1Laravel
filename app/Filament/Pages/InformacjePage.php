<?php

namespace App\Filament\Pages;

use App\Models\Informacje;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Pages\Page;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class InformacjePage extends Page implements HasForms
{
    use InteractsWithForms;
    
    protected string $view = 'filament.pages.informacje';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Megaphone;
    
    protected static ?string $slug = "informacje";
    protected static ?string $title = "Informacje";

    protected static string|UnitEnum|null $navigationGroup = "Dane na stronie";

    protected static ?int $navigationSort = 3;

    public ?array $data = [];

    public function mount(): void {
        $this->form->fill($this->pokazWazneInformacje()->attributesToArray());
    }

    public function form(Schema $schema): Schema {
        return $schema
            ->components([
                Form::make([
                    RichEditor::make('wazne_informacje')
                    ->toolbarButtons([
                        'bulletList',
                        'orderedList',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo',
                    ])
                    ->label("Ważne informacje")
                    ->required(),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('Zapisz')->submit('save'),
                        ]),
                    ]),
            ])
            ->record($this->pokazWazneInformacje())
            ->statePath('data');
    }

    public function save(): void {
    
        $this->pokazWazneInformacje()->fill($this->form->getState())->save();

        Notification::make()
            ->success()
            ->title("Zapisano")
            ->send();
    }

    protected function pokazWazneInformacje(): Informacje {
        return Informacje::query()->where('id', 1)->firstOrFail();
    }
}
