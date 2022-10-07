<?php

namespace App\Observers;

use App\Models\Flagger;

class UserObserver
{
    /**
     * Handle the Flagger "created" event.
     *
     * @param  \App\Models\Flagger  $flagger
     * @return void
     */
    public function created(Flagger $flagger)
    {
        //
    }

    /**
     * Handle the Flagger "updated" event.
     *
     * @param  \App\Models\Flagger  $flagger
     * @return void
     */
    public function updated(Flagger $flagger)
    {
        //
    }

    /**
     * Handle the Flagger "deleted" event.
     *
     * @param  \App\Models\Flagger  $flagger
     * @return void
     */
    public function deleted(Flagger $flagger)
    {
        //
    }

    /**
     * Handle the Flagger "restored" event.
     *
     * @param  \App\Models\Flagger  $flagger
     * @return void
     */
    public function restored(Flagger $flagger)
    {
        //
    }

    /**
     * Handle the Flagger "force deleted" event.
     *
     * @param  \App\Models\Flagger  $flagger
     * @return void
     */
    public function forceDeleted(Flagger $flagger)
    {
        //
    }
}
