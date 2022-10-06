<?php

namespace App\Interfaces;

interface IMustVerifyMobile
{
    public function hasVerifiedMobile();

    public function markMobileAsVerified();

    public function sendMobileVerificationNotification();
}
