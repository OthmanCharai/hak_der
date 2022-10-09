@extends('layouts.layout')
@section('content')
    <!-- END: Mobile Menu -->


    <!-- BEGIN: Content -->
    <div class="content">
        <form method="POST" action="{{ route('user.update', $user) }}" accept-charset="UTF-8" class="form-horizontal"
            enctype="multipart/form-data">


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

                                <div class="mt-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                        class="input w-full border mt-2" placeholder="Name">
                                </div>
                                <div class="mt-3">
                                    <label>Date of birth</label>
                                    <input type="date" name="birth_day" value="{{ $user->get_birth_day() }}"
                                        class="input w-full border mt-2" placeholder="Date of birth">
                                </div>
                                <div class="mt-3"> <label>Sex </label>
                                    <div class="flex flex-col sm:flex-row mt-2">
                                        <div class="flex items-center text-gray-700 mr-2"> <input type="radio"
                                                @if ($user->gender == 'Male') @checked(true) @endif
                                                class="input border mr-2" id="horizontal-radio-chris-evans" name="gender"
                                                value="Male"> <label class="cursor-pointer select-none"
                                                for="horizontal-radio-chris-evans">Male </label> </div>
                                        <div class="flex items-center text-gray-700 mr-2 mt-2 sm:mt-0"> <input
                                                type="radio" @if ($user->gender == 'Female') @checked(true) @endif
                                                class="input border mr-2" id="horizontal-radio-liam-neeson" name="gender"
                                                value="Female"> <label class="cursor-pointer select-none"
                                                for="horizontal-radio-liam-neeson">Female</label> </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone_number" value="{{ old('phone', $user->phone_number) }}"
                                        class="input w-full border mt-2" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="source-code hidden">
                                <button data-target="#copy-input"
                                    class="copy-code button button--sm border flex items-center text-gray-700"> <i
                                        data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                <div class="overflow-y-auto h-64 mt-3">
                                    <pre class="source-preview" id="copy-input"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full rounded-full border mt-2&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-xs text-gray-600 mt-2&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;password&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2 bg-gray-100 cursor-not-allowed&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Input -->

                    <!-- END: Input Sizing -->
                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-3">
                        <div class="p-5" id="input">
                            <div class="preview">
                                @foreach ($user->children as $child)
                                    <div class='mt-5'>
                                        <label>Child Name</label>
                                        <input type="text" name="children[]" value="{{ $child->name }}"
                                            class="input w-full border mt-2" placeholder="Child Name">
                                    </div>
                                @endforeach

                            </div>
                        </div>


                    </div>
                    <!-- END: Input Sizing -->

                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-5">



                    </div>
                    <!-- END: Input Sizing -->

                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Vertical Form -->
                    <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Address Details
                            </h2>
                        </div>
                        <div class="p-5" id="vertical-form">
                            <div class="preview">

                                <div>
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{ old('address', $user->address) }}"
                                        class="input w-full border mt-2" placeholder="Address">
                                </div>
                                <div class="mt-3">
                                    <label>Post code</label>
                                    <input type="text" name="zip_code" value="{{ old('zip_code', $user->zip_code) }}"
                                        class="input w-full border mt-2" placeholder="Postcode">
                                </div>
                                <div class="mt-3">
                                    <label>Sickness</label>
                                    <input type="text" name="sickness" value="{{ old('sickness', $user->sickness) }}"
                                        class="input w-full border mt-2" placeholder="Postcode">
                                </div>
                                <div class="mt-3">
                                    <label>Furnal Place</label>
                                    <input type="text" name="furnale_place"
                                        value="{{ old('furnale_place', $user->furnale_place) }}"
                                        class="input w-full border mt-2" placeholder="Postcode">
                                </div>
                                <div class="mt-3">
                                    <label>Birth Place</label>
                                    <input type="text" name="birth_place"
                                        value="{{ old('birth_place', $user->birth_place) }}"
                                        class="input w-full border mt-2" placeholder="Postcode">
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
                                    <label>Partner Name </label>
                                    <input type="text" name="partner_namr" value="{{ $user->partner->partner_name }}"
                                        class="input w-full border mt-2" placeholder="Name ">
                                </div>
                                <div class="mt-3">
                                    <label>Partner Date of Birth</label>
                                    <input type="text" name="partner_birth_day"
                                        value="{{ $user->partner->birth_day }}"
                                        class="datepicker input w-full border mt-2" placeholder="Partner Date of Birth">
                                </div>
                                <div class="mt-3">
                                    <label>Partner Date of Birth</label>
                                    <input type="text" name="partner_sickness"
                                        value="{{ $user->partner->partner_sickness }}" class="input w-full border mt-2"
                                        placeholder="Partner Date of Birth">
                                </div>
                                <div class="mt-3">
                                    <label>Partner Date of Birth</label>
                                    <input type="text" name="partner_birth_place"
                                        value="{{ $user->partner->partner_birth_place }}"
                                        class="input w-full border mt-2" placeholder="Partner Date of Birth">
                                </div>

                                <div class="mt-3">
                                    <label>Partner Furnal Place</label>
                                    <input type="text" name="partner_furnal_place"
                                        value="{{ $user->partner->partner_furnal_place }}"
                                        class="input w-full border mt-2" placeholder="Partner Date of Birth">
                                </div>
                            </div>
                           
                        </div>


                    </div>
                    <!-- END: Input Sizing -->


                    <!-- BEGIN: Input Sizing -->
                    <div class="intro-y box mt-5">
                        <div class="p-5" id="input">
                            <div class="preview">
                                @foreach ($user->children as $child)
                                    <div class='mt-5'>
                                        <label>Child Birth Day </label>
                                        <input type="text" name="child_birth_day[]" value="{{ $child->day }}"
                                            class="input w-full border mt-2" placeholder="Child Three ">
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="intro-y box mt-5">
                        <div class="p-5" id="input">
                        <div class="preview">
                            <div>
                                <label>Account Owner</label>
                                <input type="text" name="owner"
                                    value="{{ old('owner', $user->account->owner) }}" class="input w-full border mt-2"
                                    placeholder="Address">
                            </div>
                            <div class="mt-3">
                                <label>Account Number</label>
                                <input type="text" name="account_number"
                                    value="{{ old('account_number', $user->account->account_number) }}"
                                    class="input w-full border mt-2" placeholder="Postcode">
                            </div>
                        </div>
                        </div>
                      
                    </div>


               
                </div>


                <div class="row">
                    <button class="button w-24 inline-block mr-1 mb-2 border border-theme-12 text-theme-12">Submit</button>

                </div>
            </div>
        </form>
    </div>
    <!-- END: Content -->
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

        $(".changeLang").change(function() {
            window.location.href = url + "/" + $(this).val();
        });
    </script>
@endsection
