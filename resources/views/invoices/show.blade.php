@extends('layouts.layout')
@section('content')
  <!-- BEGIN: Mobile Menu -->
  <div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Hakder" class="w-6" src="http://hak-der.nx.gg/images/front-logo.png">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
</div>
<!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="http://hak-der.nx.gg/images/front-logo.png">
        <span class="hidden xl:block text-white text-lg ml-3"> Hak<span class="font-medium">Der</span> </span>
    </a>
    <div class="my-6"></div>
    <ul class="nav-sidebar">
        <li >
            <a href="http://hak-der.nx.gg/home" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/plans/index" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="navigation"></i> </div>
                <div class="side-menu__title">Plans  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/m/un-approved" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user-x"></i> </div>
                <div class="side-menu__title"> Un Approved Members  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/admin/members" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
                <div class="side-menu__title">Members  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/todos" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                <div class="side-menu__title">ToDo  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/invoices" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="side-menu__title"> Invoices  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/profile" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                <div class="side-menu__title">Profile  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/member/import" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="anchor"></i> </div>
                <div class="side-menu__title">Import  </div>
            </a>
        </li>
        <li>
            <a href="http://hak-der.nx.gg/logout" class="side-menu" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">Logout  </div>
            </a>
            <form id="logout-form" action="http://hak-der.nx.gg/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">            </form>

        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
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
                                <input type="hidden" name="_token" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->

            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Invoice
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <a href="http://hak-der.nx.gg/download/21">
                        <button class="button text-white bg-theme-1 shadow-md mr-2">Download</button>
                    </a>
                </div>
            </div>
            <!-- BEGIN: Invoice -->
            <div class="intro-y box overflow-hidden mt-5">
                <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
                    <div class="font-semibold text-theme-1 text-xl">
                        <img src="http://hak-der.nx.gg/images/logo-hakder.png" alt="">
                        <div class="mt-1" style="padding-left: 40px">Stichting moet zelf uitzoeken</div>
                    </div>
                    <div class="mt-20 lg:mt-0 lg:ml-auto lg:text-right">
                        <div class="font-semibold text-theme-1 text-3xl">INVOICE</div>
                        <div class="text-xl text-theme-1 font-medium">Invoice#:95879</div>
                        <div class="mt-1">Balance Due</div>
                        <div class="text-xl text-theme-1 font-medium">€ (EUR) 35.00</div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row border-b px-5 sm:px-20 pt-10 pb-10 sm:pb-20 text-center sm:text-left">
                    <div>
                        <div class="text-base text-gray-600">Bill To</div>
                        <div class="text-lg font-medium text-theme-1 mt-2">Test ( 12 )</div>
                        <div class="mt-1">bajaj@gmail.com</div>
                        <div class="mt-1">salt lake City</div>
                    </div>
                    <div class="mt-10 lg:mt-0 lg:ml-auto lg:text-right">
                        <div class="text-base text-gray-600">Receipt</div>
                        <div class="text-lg text-theme-1 font-medium mt-2">#</div>
                        <div class="mt-1">Jan 02, 2021</div>
                    </div>
                </div>
                <div class="px-5 sm:px-16 py-10 sm:py-20">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="border-b-2 whitespace-no-wrap">DESCRIPTION</th>
                                <th class="border-b-2 text-right whitespace-no-wrap">QTY</th>
                                <th class="border-b-2 text-right whitespace-no-wrap">PRICE</th>
                                <th class="border-b-2 text-right whitespace-no-wrap">SUBTOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border-b">
                                    <div class="font-medium whitespace-no-wrap">Uyelik Murcaati  0-18 Ya</div>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">Uyelik Murcaati  0-18 Ya bills 1 Year</div>
                                </td>
                                <td class="text-right border-b w-32">1</td>
                                <td class="text-right border-b w-32">€ 35.00</td>
                                <td class="text-right border-b w-32 font-medium">€ 35.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                    <div class="text-center sm:text-left mt-10 sm:mt-0">
                    </div>
                    <div class="text-center sm:text-right sm:ml-auto">
                        <div class="text-base text-gray-600">Subscription Charges :</div>
                        <div class="text-1xl text-theme-1 font-medium mt-1">Sub Total : € 35.00</div>
                        <div class="text-1xl text-theme-1 font-medium mt-1">Free Trial Discount : € 0.00</div>
                        <div class="text-xl text-theme-1 font-medium mt-2">dash.Total : € 35.00</div>
                        <div class="mt-1 tetx-xs">Taxes included</div>
                    </div>
                </div>
                <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                    <a href="http://hak-der.nx.gg/sepa/21" class="button bg-theme-1 text-white ">Sepa Direct Debit( Pay Now )</a>
                </div>
            </div>
            <!-- END: Invoice -->

        </div>
        <!-- END: Content -->
    </div>


@endsection
@section('jsContent')
<!-- END: JS Assets-->
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