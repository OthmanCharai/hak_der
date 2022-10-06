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

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="http://hak-der.nx.gg/invoices">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Open Invoices</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="http://hak-der.nx.gg/paid-invoices">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
                                        <div class="text-base text-gray-600 mt-1">Paid Invoices</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="http://hak-der.nx.gg/UnPaidInvoices">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">

                                            <div class="ml-auto">
                                            </div>
                                        </div>
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

        <div class="overflow-x-auto mt-5">
            <table class="table">
                <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="whitespace-no-wrap">#</th>
                    <th class="whitespace-no-wrap">Invoice No</th>
                    <th class="whitespace-no-wrap">Name</th>
                    <th class="whitespace-no-wrap">Email</th>
                    <th class="whitespace-no-wrap">Phone</th>
                    <th class="whitespace-no-wrap">Amount</th>
                    <th class="whitespace-no-wrap" style="width: 120px">Action</th>
                </tr>
                </thead>
                <tbody>
                                                    <tr>
                    <td class="border-b">1</td>
                    <td class="border-b">95879</td>
                    <td class="border-b"> Test </td>
                    <td class="border-b"> bajaj@gmail.com </td>
                    <td class="border-b"> +918583049857 </td>
                    <td class="border-b">35</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/21">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/21" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
                                    <tr>
                    <td class="border-b">2</td>
                    <td class="border-b">72416</td>
                    <td class="border-b"> Muhterem Ozdemir </td>
                    <td class="border-b"> a.gulhan@live.nl </td>
                    <td class="border-b"> 0570-652475 </td>
                    <td class="border-b">85</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/20">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/20" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
                                    <tr>
                    <td class="border-b">3</td>
                    <td class="border-b">89633</td>
                    <td class="border-b"> Bahar </td>
                    <td class="border-b"> bahar.polat@student.hu.nl </td>
                    <td class="border-b"> 0648213889 </td>
                    <td class="border-b">35</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/19">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/19" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
                                    <tr>
                    <td class="border-b">4</td>
                    <td class="border-b">94171</td>
                    <td class="border-b"> Af Ohab 2 </td>
                    <td class="border-b"> afohab@aol.com </td>
                    <td class="border-b"> 09007539392 </td>
                    <td class="border-b">35</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/15">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/15" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
                                    <tr>
                    <td class="border-b">5</td>
                    <td class="border-b">55150</td>
                    <td class="border-b"> Af Ohab 2 </td>
                    <td class="border-b"> afohab@aol.com </td>
                    <td class="border-b"> 09007539392 </td>
                    <td class="border-b">35</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/14">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/14" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
                                    <tr>
                    <td class="border-b">6</td>
                    <td class="border-b">87187</td>
                    <td class="border-b"> Aliekber Sagir </td>
                    <td class="border-b"> a.sagir@home.nl </td>
                    <td class="border-b"> 0570-613555 </td>
                    <td class="border-b">45</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/13">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/13" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
                                    <tr>
                    <td class="border-b">7</td>
                    <td class="border-b">21027</td>
                    <td class="border-b"> Alaattin Kocyilmaz </td>
                    <td class="border-b"> a.kocyilmaz@live.nl </td>
                    <td class="border-b"> 0626495558 </td>
                    <td class="border-b">45</td>
                    <td class="border-b">
                        <a href="http://hak-der.nx.gg/invoices/8">
                        <i data-feather="eye" class="w-4 h-4 mr-2"  style="display: inline; color: #28a745"></i>
                        </a>
                        <form method="POST" action="http://hak-der.nx.gg/invoices/8" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="IdA2ewf5ydwJVhySWdrt4CDwi3mMVMwzd4E3jvlz">
                        <button type="submit" class="btn btn-danger btn-sm" onclick='
                                                        if(confirm("Are you sure?") == false) {
                                                            return false;
                                                        } else {
                                                            //
                                                        }'>
                            <i data-feather="trash-2" class="w-4 h-4 mr-2" style="display: inline; color: #a71e06"></i>
                        </button>
                        </form>

                    </td>
                </tr>
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

    $(".changeLang").change(function(){
        window.location.href = url + "/"+ $(this).val();
    });

</script>
@endsection