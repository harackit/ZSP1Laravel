<?php

namespace App\Observers;

use App\Models\PlanyLekcji;
use Illuminate\Support\Facades\Storage;

class PlanyLekcjiObserver
{
    /**
     * Handle the PlanyLekcji "created" event.
     */
    public function created(PlanyLekcji $planyLekcji): void
    {
        //
    }

    public function deleted(PlanyLekcji $planyLekcji): void
    {
        if($planyLekcji->url_zdjecia) {
            Storage::disk('public')->delete($planyLekcji->url_zdjecia);
        }
    }

    /**
     * Handle the PlanyLekcji "updated" event.
     */
    public function updated(PlanyLekcji $planyLekcji): void
    {
        //
    }

    /**
     * Handle the PlanyLekcji "restored" event.
     */
    public function restored(PlanyLekcji $planyLekcji): void
    {
        //
    }

    /**
     * Handle the PlanyLekcji "force deleted" event.
     */
    public function forceDeleted(PlanyLekcji $planyLekcji): void
    {
        //
    }
}
