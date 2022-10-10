<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Http\Requests\InvoiceUpdateRequest;
use App\Models\Bill;
use App\Models\Invoice;
use Laravel\Cashier\Cashier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\Invoices\Invoice as DailyInvoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InvoiceController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        if (Auth::user()->hasRole('member')) {
            return view('invoice.index', [
                "invoices" => DB::table('invoices')->select('invoices.*', 'users.username', 'users.email', 'users.phone_number', 'plans.price')->join('users', 'invoices.user_id', 'users.id')
                    ->join('plans', 'invoices.plan_id', 'plans.id')
                    ->where('user_id', Auth::user()->id)
                    ->get(),
                "invoice_number" => Invoice::count(),
                "paid_invoice" => count(Invoice::where('paid_at', '!=', null)->get()),
                "pendding_invoice" => count(Invoice::where('paid_at', null)->get()),

            ]);
        }
        return view('invoice.index', [
            "invoices" => DB::table('invoices')->select('invoices.*', 'users.username', 'users.email', 'users.phone_number', 'plans.price')->join('users', 'invoices.user_id', 'users.id')
                ->join('plans', 'invoices.plan_id', 'plans.id')
                ->get(),
            "invoice_number" => Invoice::count(),
            "paid_invoice" => count(Invoice::where('paid_at', '!=', null)->get()),
            "pendding_invoice" => count(Invoice::where('paid_at', null)->get()),

        ]);
    }


    /**
     * get_paid_invoice
     *
     * @return View
     */
    public function get_paid_invoice(): View
    {


        return view('invoice.paid', [
            "invoices" => DB::table('invoices')->select('invoices.*', 'users.username', 'users.email', 'users.phone_number', 'plans.price')->join('users', 'invoices.user_id', 'users.id')
                ->join('plans', 'invoices.plan_id', 'plans.id')
                ->where('paid_at', '!=', null)
                ->get(),
            "invoice_number" => Invoice::count(),
            "paid_invoice" => count(Invoice::where('paid_at', '!=', null)->get()),
            "pendding_invoice" => count(Invoice::where('paid_at', null)->get()),

        ]);
    }

    /**
     * get_inpaid_invoice
     *
     * @return View
     */
    public function get_inpaid_invoice(): View
    {

        return view('invoice.inpaid', [
            "invoices" => DB::table('invoices')->select('invoices.*', 'users.username', 'users.email', 'users.phone_number', 'plans.price')->join('users', 'invoices.user_id', 'users.id')
                ->join('plans', 'invoices.plan_id', 'plans.id')
                ->where('paid_at', null)
                ->get(),
            "invoice_number" => Invoice::count(),
            "paid_invoice" => count(Invoice::where('paid_at', '!=', null)->get()),
            "pendding_invoice" => count(Invoice::where('paid_at', null)->get()),

        ]);
    }



    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('invoice.create');
    }

    /**
     * @param \App\Http\Requests\InvoiceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceStoreRequest $request)
    {
        $invoice = Invoice::create($request->validated());

        $request->session()->flash('invoice.id', $invoice->id);

        return redirect()->route('invoice.index');
    }

    /**
     * @param Request $request
     * @param \App\Models\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Invoice $invoice)
    {
        $invoice = DB::table('invoices')->select('invoices.*', 'users.username', 'users.email', 'users.phone_number', 'plans.price')
            ->join('users', 'invoices.user_id', 'users.id')
            ->join('plans', 'invoices.plan_id', 'plans.id')
            ->where('invoices.id', $invoice->id)
            ->get();
        return view('invoice.show', compact('invoice'));
    }

    /**
     * @param Request $request
     * @param \App\Models\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Invoice $invoice)
    {
        return view('invoice.edit', compact('invoice'));
    }

    /**
     * @param \App\Http\Requests\InvoiceUpdateRequest $request
     * @param \App\Models\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceUpdateRequest $request, Invoice $invoice)
    {
        $invoice->update($request->validated());

        $request->session()->flash('invoice.id', $invoice->id);

        return redirect()->route('invoice.index');
    }

    /**
     * @param Request $request
     * @param \App\Models\Invoice $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoice.index');
    }

    public function download(Invoice $invoice)
    {

        $info = DB::table('invoices')->select('invoices.*', 'users.username', 'users.email', 'users.phone_number', 'plans.price')
            ->join('users', 'invoices.user_id', 'users.id')
            ->join('plans', 'invoices.plan_id', 'plans.id')
            ->where('invoices.id', $invoice->id)
            ->get();
        $customer = new Buyer([
            'name'          => $info[0]->username,
            'custom_fields' => [
                'email' => $info[0]->email,

            ],
        ]);

        $item = (new InvoiceItem())->title('Invoice ')->pricePerUnit(1);
        $invoice = DailyInvoice::make()
            ->buyer($customer)
            ->shipping(1)
            ->addItem($item);

        return $invoice->stream();
    }

    public function checkout(Invoice $invoice):View
    {

        $invoice=DB::table('invoices')->select('invoices.id','invoices.administration_fee', 'plans.price')
            ->where('invoices.id',$invoice->id)
            ->join('plans', 'invoices.plan_id', 'plans.id')
            ->first();

        //$user = Auth::user();


       
       // $stripeIntent = $user->payWith($invoice->price+$invoice->administration_fee,['ideal']);

        return view('payments.index', [
            'price'=>$invoice->price+$invoice->administration_fee,
            'invoice' => $invoice->id,
           // 'intent' =>$stripeIntent
        ]);
    }

     public function pay(Request $request,Invoice $invoice){



        \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
        $source = \Stripe\Source::create([
            'type' => 'ideal',
            'amount' => $request->price,
            'currency' => 'eur',
            'owner' => ['email' => Auth::user()->email],
            'redirect' => ['return_url' => route('thanks')],
        ]);

        Bill::create(['source_id'=>$source->id,'amount'=>$request->price,'invoice_id'=>$request->invoice_id]);
        return redirect($source->redirect->url);
    

     }

    public function add_administration_fee(Request $request,Invoice $invoice):RedirectResponse{
        $request->validate([
            'administration_fee'=>'required'
        ]);
        $invoice->update([
            'administration_fee'=>$request->administration_fee
        ]);
        return redirect()->back();
    }

}
