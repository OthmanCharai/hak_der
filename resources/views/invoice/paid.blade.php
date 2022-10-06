@extends('layouts.layout')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> </div>
            <!-- END: Breadcrumb -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <select class="dropdown-toggle button inline-block bg-theme-2 changeLang">
                        <option value="en">English</option>
                        <option value="tr">Turkish</option>
                        <option value="nl">Dutch</option>
                    </select>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <i data-feather="search"
                        class="notification__icon"></i> </a>
            </div>

            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="http://hak-der.nx.gg/dist/images/profile-12.jpg">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Binali</div>
                            <div class="text-xs text-theme-41">admin</div>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('profile') }}"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('importe') }}"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="navigation" class="w-4 h-4 mr-2"></i> Import </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();"
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                               @csrf
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw"
                                class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="{{ route('invoice.index') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Open Invoices <span
                                                class="bg-orange-100 float-right"> {{ $invoice_number }}</span></div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="{{ route('invoice.paid') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Paid Invoices <span
                                                class="bg-orange-100 float-right">{{ $paid_invoice }}</span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="{{ route('invoice.inpaid') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">


                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Payment Pending Invoices <span
                                                class='bg-orange-100 float-right'>{{ $pendding_invoice }}</span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>

        <div class="overflow-x-auto mt-5">
            <table class="table">
                <thead>
                    <tr class="bg-gray-700 text-white">
              
                        <th class="whitespace-no-wrap">Name</th>
                        <th class="whitespace-no-wrap">Email</th>
                        <th class="whitespace-no-wrap">Status</th>

                        <th class="whitespace-no-wrap">Phone</th>
                        <th class="whitespace-no-wrap">Amount</th>
                        <th class="whitespace-no-wrap" style="width: 120px">Action</th>
                    </tr>
                </thead>
                <tbody>
                 
             
                    @foreach ($invoices as $invoice)
                   
                    <tr>
              
                        <td class="border-b"> {{ $invoice->username }} </td>
                        <td class="border-b"> {{ $invoice->email }} </td>
                        <td class="border-b"> @if($invoice->paid_at) <span class=" rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3 ">Paid</span>@else <span class="rounded-full bg-orange-500 uppercase px-2 py-1 text-xs font-bold mr-3 ">Panddig</span>@endif</td>

                        
                        <td class="border-b"> {{ $invoice->phone_number }} </td>
                        <td class="border-b">{{ $invoice->price }}</td>
                        <td class="border-b">
                            <a href="{{ route('invoice.show',$invoice->id) }}">
                                <i data-feather="eye" class="w-4 h-4 mr-2" style="display: inline; color: #28a745"></i>
                            </a>
                            <form method="POST" action="{{ route('invoice.destroy',$invoice->id) }}" accept-charset="UTF-8"
                                style="display:inline">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                                    <i data-feather="trash-2" class="w-4 h-4 mr-2"
                                        style="display: inline; color: #a71e06"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- END: Content -->
    </div>
@endsection
@section('jsContent')
    <script>
        /** add active class and stay opened when selected */
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function() {
            return this.href == url;
        }).addClass('side-menu--active');

        // for treeview
        $('ul.nav-treeview a').filter(function() {
            return this.href == url;
        }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    </script>
    <script type="text/javascript">
        var url = "http://hak-der.nx.gg/lang";

        $(".changeLang").change(function() {
            window.location.href = url + "/" + $(this).val();
        });
    </script>
@endsection
