<?php

namespace App\Http\Responses;

use Filament\Pages\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Filament\Auth\Http\Responses\LoginResponse as BaseLoginResponse;

class LoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        if(Auth::user()->is_admin) {
            return redirect()->to(Dashboard::getUrl(panel: 'panel-admin'));
        }

        return parent::toResponse($request);
    }
}