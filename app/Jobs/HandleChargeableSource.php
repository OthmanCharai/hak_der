<?php

namespace App\Jobs;

use App\Models\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\WebhookClient\Models\WebhookCall;
use Stripe\Charge;
use Stripe\Stripe;

class HandleChargeableSource implements ShouldQueue
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
        Bill::create(['source_id'=>'sssssssssss']);



    }
}
