<?php

namespace App\Jobs;

use App\Models\Bill;
use App\Models\Invoice;
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
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            'amount' => $bill->price,
            'currency' => 'eur',
            'source' => $bill->source_id
        ]);
        $invoice=Invoice::whereId($bill->invoice_id)->first();
        $invoice->paid_at=now();
        $invoice->save();
        $bill->update(['charge_id' => $charge->id]);

    }
}
