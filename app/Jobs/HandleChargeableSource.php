<?php

namespace App\Jobs;

use App\Models\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
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
    /** @va WebhookCall */
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
        $bill = Bill::where('source_id',$this->webhookCall->payload['data']['object']['id'])->firstOrFail();
        Bill::create(['source_id'=>$this->webhookCall->payload['type']]);
        try {

            Bill::create(['source_id'=>'dazet']);

           // $bill->update(['source_id' => $charge->id]);

        }catch(\Exception $e){
        }




    }
}
