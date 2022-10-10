@extends('layouts.layout')
@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                    <i data-feather="search" class="search__icon"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i>
                </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-feather="inbox"></i>
                                </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                    class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-feather="users"></i>
                                </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                    class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-feather="credit-card"></i>
                                </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">Russell Crowe</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                    russellcrowe@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-7.jpg">
                                </div>
                                <div class="ml-3">Al Pacino</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-3.jpg">
                                </div>
                                <div class="ml-3">Arnold Schwarzenegger</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                    arnoldschwarzenegger@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-3.jpg">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com
                                </div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-3.jpg">
                            </div>
                            <div class="ml-3">Oppo Find X2 Pro</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-6.jpg">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-10.jpg">
                            </div>
                            <div class="ml-3">Dell XPS 13</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">PC &amp; Laptop</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-15.jpg">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown relative mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell"
                        class="notification__icon"></i> </div>
                <div
                    class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                    <div class="notification-content__box dropdown-box__content box">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-2.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-7.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                                    making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-3.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Arnold Schwarzenegger</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text
                                    ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-3.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-10.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text
                                    ever since the 1500</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Russell Crowe</div>
                            <div class="text-xs text-theme-41">Software Engineer</div>
                        </div>
                        <div class="p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Sepa Payment
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="button text-white bg-theme-1 shadow-md mr-2">Print</button>
                <div class="dropdown relative ml-auto sm:ml-0">
                    <button class="dropdown-toggle button px-2 box text-gray-700">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word </a>
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Invoice -->
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Input -->

                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Sepa Payment
                        </h2>
                    </div>
                    <div class="p-5" id="input">
                        <div class="preview">
                            <form method="POST" action="{{ route('pay',$invoice) }}" accept-charset="UTF-8" id="payment-form"
                                class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="invoice_id" value="{{ $invoice }}" id="">
                                <input type="hidden" name='payment_method' id="payment_method">
                                <input type="hidden" name='price' value="{{ $price }}">
                                <div>
                                    <label for="name">Name</label>
                                    <input id="name" name="name" value="Test" placeholder="Jenny Rosen"
                                        required="" class="input w-full border mt-2" id='name'>
                                </div>
                                <div class='ideal-bank-element mt-4' id='ideal-bank-element'>
                                    <label for="name">Select A bank</label>

                                </div>
                             
                                <button  id='submit-btn'
                                    class=' mt-8 text-white bg-theme-1 shadow-md mr-2'>Pay {{ $price }}
                                    $</button>
                               
                                <div id="mandate-acceptance " class='mt-8'>
                                    <p>
                                        By providing your IBAN and confirming this payment, you are
                                        authorizing Rocketship Inc. and Stripe, our payment service
                                        provider, to send instructions to your bank to debit your account and
                                        your bank to debit your account in accordance with those instructions.
                                        You are entitled to a refund from your bank under the terms and
                                        conditions of your agreement with your bank. A refund must be claimed
                                        within 8 weeks starting from the date on which your account was debited.
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input -->

        </div>
        <!-- END: Invoice -->

    </div>
    <!-- END: Content -->
    </div>
@endsection
@section('jsContent')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ config('services.stripe.publishable_key') }}');
        var elements = stripe.elements({});
        var idealBank = elements.create('idealBank');
        idealBank.mount('#ideal-bank-element');
         var submit_form = document.getElementById('payment-form');
        var submit_btn = document.getElementById('submit-btn');
        var name=document.getElementById('name')
        var payment_method=document.getElementById('payment_method');

        submit_form.addEventListener('submit', function(e) {
            e.preventDefault()
            submit_btn.disabled = true;
            this.submit();
        }) 
        
    </script>
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

    <script>
        $(document).ready(function() {
            // Create a Stripe client.
            // Note: this merchant has been set up for demo purposes.
            var stripe = Stripe(
                'pk_test_51IalQ0Jdv71y2u4x3aEdbHz6uPa3whxahOSEVoqq4EPsKEzrdJpCY0POWLRfvl68EH10SvW3ZMbX9oum9jVY9mIK00AkQwJtfo'
            );
            // Create an instance of Elements.
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {

                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a',
                    ':-webkit-autofill': {
                        color: '#fa755a',
                    },
                }
            };
            // Create an instance of the iban Element.
            var iban = elements.create('iban', {
                style: style,
                supportedCountries: ['SEPA'],
            });
            // Add an instance of the iban Element into the `iban-element` <div>.
            iban.mount('#iban-element');
            var errorMessage = document.getElementById('error-message');
            var bankName = document.getElementById('bank-name');
            iban.on('change', function(event) {
                // Handle real-time validation errors from the iban Element.
                if (event.error) {
                    errorMessage.textContent = event.error.message;
                    errorMessage.classList.add('visible');
                } else {
                    errorMessage.classList.remove('visible');
                }
                // Display bank name corresponding to IBAN, if available.
                if (event.bankName) {
                    bankName.textContent = event.bankName;
                    bankName.classList.add('visible');
                } else {
                    bankName.classList.remove('visible');
                }
            });
            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                //showLoading();
                var sourceData = {
                    type: 'sepa_debit',
                    currency: 'eur',
                    owner: {
                        name: document.querySelector('input[name="name"]').value,
                        email: document.querySelector('input[name="email"]').value,
                    },
                    mandate: {
                        // Automatically send a mandate notification email to your customer
                        // once the source is charged.
                        notification_method: 'email',
                    }
                };
                // Call `stripe.createSource` with the iban Element and additional options.
                stripe.createSource(iban, sourceData).then(function(result) {
                    console.log(result)
                    if (result.error) {
                        // Inform the customer that there was an error.
                        errorMessage.textContent = result.error.message;
                        errorMessage.classList.add('visible');
                        //stopLoading();
                    } else {
                        // Send the Source to your server to create a charge.
                        errorMessage.classList.remove('visible');
                        stripeSourceHandler(result.source);
                    }
                });
            });

            function stripeSourceHandler(source) {
                // Insert the Source ID into the form so it gets submitted to the server.
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeSource');
                hiddenInput.setAttribute('value', source.id);
                form.appendChild(hiddenInput);
                // Submit the form.
                form.submit();
            }
        });
    </script>
@endsection
