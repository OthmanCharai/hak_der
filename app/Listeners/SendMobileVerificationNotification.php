<?php

namespace App\Listeners;

use App\Interfaces\IMustVerifyMobile;
use Illuminate\Auth\Events\Registered;

class SendMobileVerificationNotification
{
    public function handle(Registered $event)
    {
        if ($event->user instanceof IMustVerifyMobile && ! $event->user->hasVerifiedMobile()) {
            $event->user->sendMobileVerificationNotification(true);

        }
    }
}
