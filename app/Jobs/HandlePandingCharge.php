<?php

namespace App\Jobs;

use App\Models\User;
use App\Notifications\PanddingChargeSend;
use App\Notifications\SendOrderNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\Models\WebhookCall;

class HandlePandingCharge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $webhookCall;
    public function __construct(WebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $charge=$this->webhookCall->payload['data']['object'];

        $user=User::where('stripe_id',$charge['customer'])->first();

        $user->notify(new PanddingChargeSend($user->username,$this->webhookCall->payload['data']['object']['id']));
    }
}
