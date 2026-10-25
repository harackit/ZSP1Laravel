<?php

namespace App\Http\Middleware;

use Filament\Http\Middleware\Authenticate;
use Override;

class RedirectAdminGuestsToLogin extends Authenticate
{
    #[Override]
    protected function redirectTo($request): ?string
    {
        return $request->expectsJson() ? null : url('/panel/login');
     }
}
