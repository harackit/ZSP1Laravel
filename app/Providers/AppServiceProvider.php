<?php

namespace App\Providers;

use App\Http\Responses\LoginResponse;
use App\Http\Responses\LogoutResponse;
use App\Models\PlanyLekcji;
use App\Models\Wydarzenia;
use App\Models\Zastepstwa;
use App\Observers\PlanyLekcjiObserver;
use App\Observers\WydarzeniaObserver;
use App\Observers\ZastepstwaObserver;
use Filament\Auth\Http\Responses\LoginResponse as BaseLoginResponse;
use Filament\Auth\Http\Responses\LogoutResponse as BaseLogoutResponse;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BaseLoginResponse::class, LoginResponse::class);
        $this->app->bind(BaseLogoutResponse::class, LogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Wydarzenia::observe(WydarzeniaObserver::class);
        Zastepstwa::observe(ZastepstwaObserver::class);
        PlanyLekcji::observe(PlanyLekcjiObserver::class);
    }
}
