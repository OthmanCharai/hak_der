<?php

namespace App\Jobs;

use App\Models\Bill;
use App\Models\User;
use App\Notifications\SendOrderNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Spatie\WebhookClient\Models\WebhookCall;

class HandleSucceededCharge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public WebhookCall $webhookCall;
    public function __construct(WebhookCall $webhookCall)
    {
        //
        $this->webhookCall=$webhookCall;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $charge=$this->webhookCall->payload['data']['object'];

        $user=User::where('stripe_id',$charge['customer'])->first();

        $user->notify(new SendOrderNotification($user->username,$this->webhookCall->payload['data']['object']['id']));

       // $user->newsubscription('default','price_yearly')->createAndSendInvoice();
       // $user->newSubscription('default', 'price_yearly')->create($this->webhookCall->payload['data']['object']['id']);

    }
}
