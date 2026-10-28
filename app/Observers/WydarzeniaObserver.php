<?php

namespace App\Observers;

use App\Models\Wydarzenia;
use Illuminate\Support\Facades\Storage;

class WydarzeniaObserver
{
    public function created(Wydarzenia $wydarzenia): void
    {
        $stareWydarzenia = Wydarzenia::orderBy('dodano_w_dniu', 'desc')->orderBy('id', 'desc')
            ->limit(99)
            ->skip(6)
            ->pluck('id');

        if($stareWydarzenia->isNotEmpty()) {
            Wydarzenia::destroy($stareWydarzenia);
        }
    }

    public function deleted(Wydarzenia $wydarzenia): void
    {
        if($wydarzenia->url_zdjecia) {
            Storage::disk('public')->delete($wydarzenia->image_url);
        }
    }


    /**
     * Handle the Wydarzenia "updated" event.
     */
    public function updated(Wydarzenia $wydarzenia): void
    {
        //
    }

    /**
     * Handle the Wydarzenia "restored" event.
     */
    public function restored(Wydarzenia $wydarzenia): void
    {
        //
    }

    /**
     * Handle the Wydarzenia "force deleted" event.
     */
    public function forceDeleted(Wydarzenia $wydarzenia): void
    {
        //
    }
}
