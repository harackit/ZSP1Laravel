<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Filament\Auth\Http\Responses\LogoutResponse as BaseLogoutResponse;

class LogoutResponse extends BaseLogoutResponse
{
    public function toResponse($request): RedirectResponse
    {
        if($request->is('panel-admin*')) {
            return redirect()->to('/panel/login');
        }

        return parent::toResponse($request);
    }
}