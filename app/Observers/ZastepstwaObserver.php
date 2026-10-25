<?php

namespace App\Observers;

use App\Models\Zastepstwa;

class ZastepstwaObserver
{
    /**
     * Handle the Zastepstwa "created" event.
     */
    public function created(Zastepstwa $zastepstwa): void
    {
        $stareZastepstwa = Zastepstwa::where('dzien_zastepstwa', '<', today('Europe/Warsaw')->subDays(2)->toDateString())->get();
        
        if($stareZastepstwa->isNotEmpty()) {
            Zastepstwa::destroy($stareZastepstwa);
        }
    }

    /**
     * Handle the Zastepstwa "updated" event.
     */
    public function updated(Zastepstwa $zastepstwa): void
    {
        //
    }

    /**
     * Handle the Zastepstwa "deleted" event.
     */
    public function deleted(Zastepstwa $zastepstwa): void
    {
        //
    }

    /**
     * Handle the Zastepstwa "restored" event.
     */
    public function restored(Zastepstwa $zastepstwa): void
    {
        //
    }

    /**
     * Handle the Zastepstwa "force deleted" event.
     */
    public function forceDeleted(Zastepstwa $zastepstwa): void
    {
        //
    }
}
