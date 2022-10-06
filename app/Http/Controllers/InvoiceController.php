<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Http\Requests\InvoiceUpdateRequest;
use App\Models\Bill;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use LaravelDaily\Invoices\Invoice as DailyInvoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Charge;
use Stripe\Stripe;

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
        $invoice=DB::table('invoices')->select('invoices.id', 'plans.price')
            ->where('invoices.id',$invoice->id)
            ->join('plans', 'invoices.plan_id', 'plans.id')
            ->get();

          
        return view('checkout.index', [
            'invoice' => $invoice,

        ]);
    }

     public function pay(Request $request){
     
        
        

        $bill=Bill::create(['source_id'=>$request->stripeSource]);

     
    }

}
