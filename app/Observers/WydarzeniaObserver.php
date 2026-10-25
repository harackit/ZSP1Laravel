<?php

namespace App\Observers;

use App\Models\Wydarzenia;

class WydarzeniaObserver
{
    /**
     * Handle the Wydarzenia "created" event.
     */
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

    /**
     * Handle the Wydarzenia "updated" event.
     */
    public function updated(Wydarzenia $wydarzenia): void
    {
        //
    }

    /**
     * Handle the Wydarzenia "deleted" event.
     */
    public function deleted(Wydarzenia $wydarzenia): void
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
