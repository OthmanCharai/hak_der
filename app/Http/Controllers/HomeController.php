<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __invoke()
    {


        return view('dashbord',[
            'members'=>User::count(),
            'invoices'=>Invoice::count(),
            'paid_invoice'=>count(Invoice::where('paid_at','!=',null)->get()),
            'panding_invoice'=>count(Invoice::where('paid_at','!=',null)->get())

        ]);
    }
}
