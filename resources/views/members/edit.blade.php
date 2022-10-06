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
                <input type="hidden" name="_token" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">            </form>

        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
                <!-- BEGIN: Content -->
        <div class="content">
            <form method="POST" action="http://hak-der.nx.gg/admin/member/709/edit" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PsG6ej0Ngm7lfKJWROoC0sF1njj6Lidfr47O1gLa">


            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Registration Form
                </h2>
            </div>
                        
            
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Input -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Personal Detail
                            </h2>
                        </div>
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div>
                                    <label>Membership Number</label>
                                    <input type="text" name="member_id"  value="00201" class="input w-full border mt-2" placeholder="Membership Number">
                                </div>
                                <div class="mt-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="Ahmet Aydogdu" class="input w-full border mt-2" placeholder="Name">
                                </div>
                                <div class="mt-3">
                                    <label>Date of birth</label>
                                    <input type="text" name="dob"  value="1969-04-01" class="input w-full border mt-2" placeholder="Date of birth">
                                </div>
                                <div class="mt-3"> <label>Sex </label>
                                    <div class="flex flex-col sm:flex-row mt-2">
                                        <div class="flex items-center text-gray-700 mr-2"> <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="gender" value="male"> <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Male </label> </div>
                                        <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input type="radio" class="input border mr-2" id="horizontal-radio-liam-neeson" name="gender" value="female"> <label class="cursor-pointer select-none" for="horizontal-radio-liam-neeson">Female</label> </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone"  value="023-5259542" class="input w-full border mt-2" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="source-code hidden">
                                <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                <div class="overflow-y-auto h-64 mt-3">
                                    <pre class="source-preview" id="copy-input"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full rounded-full border mt-2&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-xs text-gray-600 mt-2&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;password&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2 bg-gray-100 cursor-not-allowed&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Input -->
                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-3">
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div class="mt-3">
                                    <label>Email </label>
                                    <input type="email" name="email"  value="aainterieurbouw@hotmail.com" class="input w-full border mt-2" placeholder="E-mail">
                                </div>
                                <div class="mt-3">
                                    <label>Password </label>
                                    <input id="password" type="password" name="password" class="input w-full border mt-2"  placeholder="Password ">
                                </div>
                                <div class="mt-3">
                                    <label>Confirm Password</label>
                                    <input  id="password-confirm" type="password" name="password_confirmation" class="input w-full border mt-2" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->
                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-3">
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div>
                                    <label>Child Two</label>
                                    <input type="text" name="childTwo"  value="" class="input w-full border mt-2" placeholder="Child Two">
                                </div>
                                <div class="mt-3">
                                    <label>Child Two Date of Birth</label>
                                    <input type="text" name="childTwo_dob"  value="2021-09-08" class="input w-full border mt-2" placeholder="Child Two Date of Birth">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->

                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-5">
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div>
                                    <label>Child Four</label>
                                    <input type="text" name="childFour"  value="" class="input w-full border mt-2" placeholder="Child Four">
                                </div>
                                <div class="mt-3">
                                    <label>Child Four Date of Birth</label>
                                    <input type="text" name="childFour_dob"  value="2021-09-08" class="input w-full border mt-2" placeholder="Child Four Date of Birth">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->

                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Vertical Form -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                AddressDetails
                            </h2>
                        </div>
                        <div class="p-5" id="vertical-form">
                            <div class="preview">
                                <div>
                                    <label>Gsm </label>
                                    <input type="text" name="gsm"  value="06-55943169" class="input w-full border mt-2" placeholder="Gsm">
                                </div>
                                <div>
                                    <label>Address</label>
                                    <input type="text" name="address"  value="Pijnboomstraat 92" class="input w-full border mt-2" placeholder="Address">
                                </div>
                                <div class="mt-3">
                                    <label>Postcode</label>
                                    <input type="text" name="postcode"  value="00201" class="input w-full border mt-2" placeholder="Postcode">
                                </div>
                                <div class="mt-3">
                                    <label>Venue </label>
                                    <input type="text" name="vanue"  value="" class="input w-full border mt-2" placeholder="Venue">
                                </div>
                                <div class="mt-3">
                                    <label>Land </label>
                                    <input type="text" name="land"  value="" class="input w-full border mt-2" placeholder="Land ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Vertical Form -->
                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-5">
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div>
                                    <label>Name </label>
                                    <input type="text" name="partner"  value="Nuran" class="input w-full border mt-2" placeholder="Name ">
                                </div>
                                <div class="mt-3">
                                    <label>Partner Date of Birth</label>
                                    <input type="text" name="partner_dob"  value="1971-12-25" class="input w-full border mt-2" placeholder="Partner Date of Birth">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->
                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-5">
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div>
                                    <label>Child One</label>
                                    <input type="text" name="childOne"  value="" class="input w-full border mt-2" placeholder="Child One">
                                </div>
                                <div class="mt-3">
                                    <label>Child One Date of Birth </label>
                                    <input type="text" name="childOne_dob"  value="2021-09-08" class="input w-full border mt-2" placeholder="Child One Date of Birth">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->

                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-5">
                        <div class="p-5" id="input">
                            <div class="preview">
                                <div>
                                    <label>Child Three </label>
                                    <input type="text" name="childThree"  value="" class="input w-full border mt-2" placeholder="Child Three ">
                                </div>
                                <div class="mt-3">
                                    <label>Child Three Date of Birth</label>
                                    <input type="text" name="childThree_dob"  value="2021-09-08" class="input w-full border mt-2" placeholder="Child Three Date of Birth">
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->
                </div>
                <div class="row">
                    <button class="button w-24 inline-block mr-1 mb-2 border border-theme-12 text-theme-12">Submit</button>

                </div>
            </div>
            </form>
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
