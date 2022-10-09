<?php

namespace App\Listeners;

use App\Events\MemberApproved;


class MemberApprovedListnner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MemberApproved $event)
    {
            $event->user->notify(new \App\Notifications\MemberApproved($event->user));
    }
}
