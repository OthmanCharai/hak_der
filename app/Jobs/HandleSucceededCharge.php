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
        Bill::create(['source_id'=>'sssssssssss']);



    }
}
