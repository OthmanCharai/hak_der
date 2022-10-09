@extends('layouts.layout')
@section('content')
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Hakder" class="w-6" src="http://hak-der.nx.gg/images/front-logo.png">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
</div>
<!-- END: Mobile Menu -->
   
                      <!-- BEGIN: Side Menu -->

<!-- END: Side Menu -->
                      <!-- BEGIN: Content -->
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
                        <option value="en" >English</option>
                        <option value="tr" >Turkish</option>
                        <option value="nl" >Dutch</option>
                    </select>
                </div>
                <a class="notification notification--light sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
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
                            <a href="http://hak-der.nx.gg/profile" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </div>
                        <div class="p-2">
                            <a href="http://hak-der.nx.gg/member/import" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="navigation" class="w-4 h-4 mr-2"></i> Import </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="http://hak-der.nx.gg/logout" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>  Logout </a>
                            <form id="logout-form" action="http://hak-der.nx.gg/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="uBubOKgpweXYrp9GurVj2DemcO4oMRedGc6o8eof">                            </form>

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
                            <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">{{ $members }}</div>
                                        <div class="text-base text-gray-600 mt-1">Members</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <a href="{{ route('invoice.index') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">{{ $invoices }}</div>
                                        <div class="text-base text-gray-600 mt-1">Open Invoices</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <a href="{{ route('invoice.paid') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">{{ $paid_invoice }}</div>
                                        <div class="text-base text-gray-600 mt-1">Paid Invoices</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <a href="{{ route('invoice.inpaid') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">{{ $paid_invoice }}</div>
                                        <div class="text-base text-gray-600 mt-1">Payment Pending Invoices</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
            </div>
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

    $(".changeLang").change(function(){
        window.location.href = url + "/"+ $(this).val();
    });

</script>
@endsection