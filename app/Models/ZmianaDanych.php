<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;

// UMIESCIC TRAIT W KAZDYM MODELU KTORY MA ODSWIEZAC GLOWNA STRONE
trait ZmianaDanych
{
    protected static function bootZmianaDanych() : void {

        static::created(fn () => Cache::forever('wersja_strony', now()->timestamp));
        static::updated(fn () => Cache::forever('wersja_strony', now()->timestamp));
        static::deleted(fn () => Cache::forever('wersja_strony', now()->timestamp));
        //        ^ jesli pokazuje jako blad to nic, ma tak byc
    }
}
