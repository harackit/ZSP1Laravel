<?php

namespace App\Observers;

use App\Models\ZblizajaceWydarzenia;

class ZblizajaceWydarzeniaObserver
{
    /**
     * Handle the ZblizajaceWydarzenia "created" event.
     */
    public function created(ZblizajaceWydarzenia $zblizajaceWydarzenia): void
    {
        $stareZblizajaceWydarzenia = 
        ZblizajaceWydarzenia::where('dzien_czas_wydarzenia', '<', today('Europe/Warsaw')->subDays(2)->toDateString())->get();

        if ($stareZblizajaceWydarzenia->isNotEmpty()) {
            ZblizajaceWydarzenia::destroy($stareZblizajaceWydarzenia);
        }
    }

    /**
     * Handle the ZblizajaceWydarzenia "updated" event.
     */
    public function updated(ZblizajaceWydarzenia $zblizajaceWydarzenia): void
    {
        //
    }

    /**
     * Handle the ZblizajaceWydarzenia "deleted" event.
     */
    public function deleted(ZblizajaceWydarzenia $zblizajaceWydarzenia): void
    {
        //
    }

    /**
     * Handle the ZblizajaceWydarzenia "restored" event.
     */
    public function restored(ZblizajaceWydarzenia $zblizajaceWydarzenia): void
    {
        //
    }

    /**
     * Handle the ZblizajaceWydarzenia "force deleted" event.
     */
    public function forceDeleted(ZblizajaceWydarzenia $zblizajaceWydarzenia): void
    {
        //
    }
}
