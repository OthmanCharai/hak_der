<?php

namespace App;

use Fouladgar\MobileVerification\Contracts\SMSClient;
use Fouladgar\MobileVerification\Notifications\Messages\Payload;

class SampleSMS implements SMSClient
{

    public function sendMessage(Payload $payload): mixed
    {
        return $this->SMSService
            ->send($payload->getTo(), $payload->getToken());
    }
}
