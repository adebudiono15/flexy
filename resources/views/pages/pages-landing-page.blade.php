@extends('layouts.master')

@section('title','Landing Page')

@push('css')
<link rel="stylesheet" href="/assets/css/landing-page.css">
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&family=Roboto:wght@400;500;900&display=swap"
    rel="stylesheet">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Landing Page</div>
</div>
<div class="pd-20 pt-0">

    {{-- Section --}}
    <div class="card mt-4 hero-1">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/assets/img/landing-page/logo.png" width="120" height="35" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active mr-4">
                            <a class="nav-link text-white" href="#">Demos <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white" href="#">Features</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white" href="#">Cards</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-white" href="#">Component</a>
                        </li>
                        <button class="btn btn-nav shadow">Buy Now</button>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Last Navbar --}}

        {{-- hero --}}
        <div class="container">

            <div class="row section-1">
                <div class="col-md-4">
                    <h2 class="hero-h2">FLEXY</h2>
                    <h4 class="hero-h4">Admin Template</h4>
                    <p class="p-hero">The most developer friendly & highly customizable Bootstrap Admin Template of 2020
                        !</p>
                    <div class="btn btn-primary live-demo mr-4 mt-5">Live Demo <i class="icon-eye ml-1"></i></div>
                    <div class="btn btn-main purchase mt-5">Purchase <i class="icon-shopping-cart ml-1"></i></div>
                </div>
                <div class="col-md-6">
                    <img src="/assets/img/landing-page/hero-2.png" class="img-hero shadow" alt="">
                </div>
            </div>
        </div>
        {{-- last hero --}}

        {{-- Content 2 --}}
        <section class="content">
            <h2 class="h-content text-center">Select a demo below to start.</h2>
            <p class="p-content text-center">Flexy is beautifully crafted, clean & modern designed admin theme
                with 6 different demos light, semi dark & dark versions.</p>
        </section>
        <div class="container-fluid justify-content-center d-flex content-demo">
            <div class="row">
                <div class="col-md-4 text-center mt-4">
                    <P class="p-demo">Vertical Layout</P>
                    <p class="badge badge-clean-danger mr-2">HTML</p>
                    <p class="badge badge-clean-danger mr-2">HTML + Laravel</p>
                    <p class="badge badge-clean-danger">RTL</p>
                    <img src="/assets/img/landing-page/demo-1.png" class="img-demo shadow" alt="">
                </div>
                <div class="col-md-4 text-center mt-4">
                    <P class="p-demo">Vertical Dark Layout</P>
                    <p class="badge badge-clean-danger mr-2">HTML</p>
                    <p class="badge badge-clean-danger mr-2">HTML + Laravel</p>
                    <p class="badge badge-clean-danger">RTL</p>
                    <img src="/assets/img/landing-page/demo-2.png" class="img-demo shadow" alt="">
                </div>
                <div class="col-md-4 text-center mt-4">
                    <P class="p-demo">Horizontal Layout</P>
                    <p class="badge badge-clean-danger mr-2">HTML</p>
                    <p class="badge badge-clean-danger mr-2">HTML + Laravel</p>
                    <p class="badge badge-clean-danger">RTL</p>
                    <img src="/assets/img/landing-page/demo-1.png" class="img-demo shadow" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid justify-content-center d-flex content-demo">
            <div class="row mb-5">
                <div class="col-md-4 text-center mt-4">
                    <P class="p-demo">Horizontal Dark Layout</P>
                    <p class="badge badge-clean-danger mr-2">HTML</p>
                    <p class="badge badge-clean-danger mr-2">HTML + Laravel</p>
                    <p class="badge badge-clean-danger">RTL</p>
                    <img src="/assets/img/landing-page/demo-1.png" class="img-demo shadow" alt="">
                </div>
                <div class="col-md-4 text-center mt-4">
                    <P class="p-demo">Collapsed Layout</P>
                    <p class="badge badge-clean-danger mr-2">HTML</p>
                    <p class="badge badge-clean-danger mr-2">HTML + Laravel</p>
                    <p class="badge badge-clean-danger">RTL</p>
                    <img src="/assets/img/landing-page/demo-2.png" class="img-demo shadow" alt="">
                </div>
                <div class="col-md-4 text-center mt-4">
                    <P class="p-demo">Semi Dark Layout</P>
                    <p class="badge badge-clean-danger mr-2">HTML</p>
                    <p class="badge badge-clean-danger mr-2">HTML + Laravel</p>
                    <p class="badge badge-clean-danger">RTL</p>
                    <img src="/assets/img/landing-page/demo-3.png" class="img-demo shadow" alt="">
                </div>
            </div>
        </div>
        {{-- last Content 2 --}}

        {{-- content 3 --}}
        <section class="content">
            <h2 class="h-content text-center">Select a demo below to start.</h2>
            <p class="p-content text-center">Flexy is beautifully crafted, clean & modern designed admin theme
                with 6 different demos light, semi dark & dark versions.</p>
        </section>
        <div class="jumbotron mb-0 text-center content-features">
            <div class="container">
                <div class=" row justify-content-center text-center">
                    <div class="col-lg-4 text-left">
                        <img src="/assets/img/landing-page/layers.png" class="img-content-3" />
                        <p class="content-p">Bootstrap 4.3+</p>
                        <p class="content-header-p">Built on top of awesome Bootstrap latest 4.3+ version.</p>
                    </div>
                    <div class="col-lg-4 text-left">
                        <img src="/assets/img/landing-page/vector.png" class="img-content-3" />
                        <p class="content-p">Clean & Modern Design</p>
                        <p class="content-header-p">Beautifully crafted, clean & modern designed admin theme with 3
                            different demos & light - dark versions.</p>
                    </div>
                    <div class="col-lg-4 text-left">
                        <img src="/assets/img/landing-page/thumbs-up.png" class="img-content-3" />
                        <p class="content-p">Easy Navigation</p>
                        <p class="content-header-p">Carefully crafted, clean, smart & easy theme navigation with
                            collapsible option.</p>
                    </div>
                </div>
                <div class=" row justify-content-center text-center" style="margin-top: 60px;">
                    <div class=" col-lg-4 text-left">
                        <img src="/assets/img/landing-page/scope.png" class="img-content-3" />
                        <p class="content-p">Quick Search</p>
                        <p class="content-header-p">Easy & smart fuzzy search functionality which enables users to
                            search quickly.</p>
                    </div>
                    <div class="col-lg-4 text-left">
                        <img src="/assets/img/landing-page/responsive.png" class="img-content-3" />
                        <p class="content-p">Responsive & User-Friendly</p>
                        <p class="content-header-p">Complete responsive & user-friendly to pleasing your user.</p>
                    </div>
                    <div class="col-lg-4 text-left ">
                        <img src="/assets/img/landing-page/file.png" class="img-content-3" />
                        <p class="content-p"></p>
                        <p class="content-header-p">DashLite offers highly scalable and endless customization.</p>
                    </div>
                </div>
                <div class=" row justify-content-center text-center " style="margin-top: 60px; ">
                    <div class="col-lg-4 text-left ">
                        <img src="/assets/img/landing-page/checklist.png" class="img-content-3" />
                        <p class="content-p">Quality Code</p>
                        <p class="content-header-p">We follow the best industry code structure that all developers will
                            be able to pick up easily and fall in love</p>
                    </div>
                    <div class="col-lg-4 text-left ">
                        <img src="/assets/img/landing-page/headphones.png" class="img-content-3" />
                        <p class="content-p">Support</p>
                        <p class="content-header-p">Get access to premium customer support from the actual people who
                            have created.</p>
                    </div>
                    <div class="col-lg-4 text-left ">
                        <img src="/assets/img/landing-page/repeat.png" class="img-content-3" />
                        <p class="content-p ">Dark & Light Layouts</p>
                        <p class="content-header-p">Flexy comes with built-in light and dark layouts, select as per your
                            preference.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- last content 3 --}}
        {{-- content 4 --}}
        <section class="content">
            <h2 class="h-content text-center">Pages</h2>
            <p class="p-content text-center">Flexy is beautifully crafted, clean & modern designed admin them with 6
                different demos light, semi dark & dark
                versions.</p>
        </section>
        <div class="jumbotron mb-0 content-pages">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-4 ">
                        <p class="p-pages">Profile</p>
                        <img src="/assets/img/landing-page/pages-profile.png" class="img-pages shadow" alt="">
                        <button class="btn btn-main shadow mt-5">Demo</button>
                    </div>
                    <div class="col-lg-4 ">
                        <p class="p-pages">User Setting</p>
                        <img src="/assets/img/landing-page/pages-user-setting.png" class="img-pages shadow" alt="">
                        <button class="btn btn-main shadow mt-5">Demo</button>
                    </div>
                    <div class="col-lg-4 ">
                        <p class="p-pages">Login</p>
                        <img src="/assets/img/landing-page/pages-login.png" class="img-pages shadow" alt="">
                        <button class="btn btn-main shadow mt-5">Demo</button>
                    </div>
                </div>
                <div class="row text-center justify-content-center mt-80">
                    <div class="col-lg-4 ">
                        <p class="p-pages">Email</p>
                        <img src="/assets/img/landing-page/pages-email.png" class="img-pages shadow" alt="">
                        <button class="btn btn-main shadow mt-5">Demo</button>
                    </div>
                    <div class="col-lg-4 ">
                        <p class="p-pages">Invoice</p>
                        <img src="/assets/img/landing-page/pages-invoice.png" class="img-pages shadow" alt="">
                        <button class="btn btn-main shadow mt-5">Demo</button>
                    </div>
                    <div class="col-lg-4 ">
                        <p class="p-pages">Empty State</p>
                        <img src="/assets/img/landing-page/pages-empty-state.png" class="img-pages shadow" alt="">
                        <button class="btn btn-main shadow mt-5">Demo</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- last content 4 --}}

        {{-- content 5 --}}
        <section class="content">
            <h2 class="h-content text-center">Cards</h2>
            <p class="p-content text-center">Flexy provides basic & advanced cards for eCommerce, Analytics
                Statistics, Weather, Charts, Maps and Interactive.</p>
        </section>
        <div class="jumbotron content-cards">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col">
                        <img src="/assets/img/landing-page/cards.png" width="750px" class="shadow" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- last content 5 --}}

        {{-- content 6 --}}
        <section class="content">
            <h2 class="h-content text-center">Components</h2>
            <p class="p-content text-center">We have used most popular Vuexy components and combined them with useful
                components. Themed them with same UI of vuexy
                principles and created a perfect design harmony.</p>
        </section>
        <div class="jumbotron jumbotron-fluid text-center mb-0">
            <div class=" container ">
                <div class=" row justify-content-center ">
                    <div class="col-lg-2 ">
                        <i class="bx bx-message-alt-error bx-fw bx-md text-grey"></i>
                        <p class="text-grey mt-2">Alert</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-link bx-fw bx-md text-grey"></i>
                        <p class="text-grey mt-2">Buttons</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-list-minus bx-fw bx-md text-grey"></i>
                        <p class="text-grey mt-2">Breadcrumbs</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-landscape bx-fw bx-md text-grey"></i>
                        <p class="text-grey mt-2">Carousel</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-caret-down bx-fw bx-md text-grey"></i>
                        <p class="text-grey mt-2">Dropdown</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-list-ul bx-fw bx-md text-grey"></i>
                        <p class="text-grey mt-2">List Group</p>
                    </div>
                </div>
                <div class=" row justify-content-center " style="margin-top: 60px;">
                    <div class="col-lg-2 ">
                        <i class="bx bx-link-external bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Modals</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-layer-plus bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Pagination</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-movie bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Navs Component</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-notepad bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Navbar</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-right-indent bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Tabs Component</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-edit-alt bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Tooltips</p>
                    </div>
                </div>
                <div class=" row justify-content-center " style="margin-top: 60px;">
                    <div class="col-lg-2 ">
                        <i class="bx bx-pencil bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Popover</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-badge bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Badges</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-info-circle bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Pill Badges</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-grid-horizontal bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Progress</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-intersect bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Media Object</p>
                    </div>
                    <div class="col-lg-2 ">
                        <i class="bx bx-loader-alt bx-fw bx-md text-grey"></i>
                        <p class="text-grey">Spinner</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- last content 6 --}}

        {{-- content 7 --}}
        <section class="content">
            <h2 class="h-content text-center">FAQ</h2>
            <p class="p-content text-center">Got a question? We've got answers. If you have some other questions, see
                our support center.</p>
        </section>
        <div class="jumbotron jumbotron-fluid faq_bg mb-0">
            <section id="faq-area" data-scroll-index="3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            <div id="accordion" role="tablist">
                                <!--start faq single-->
                                <div class="card two">
                                    <div class="card-header active" role="tab" id="faq1">
                                        <h5 class="mb-0">
                                            <a class="btn btn-light button-faq text-left" data-toggle="collapse"
                                                href="#collapse1" role="button" aria-expanded="true"
                                                aria-controls="collapseExample">Do you charge for each upgrade ?</a>
                                        </h5>
                                    </div>
                                    <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="faq1"
                                        data-parent="#accordion">
                                        <div class="card-body" style="background-color: #FE9754 ;">
                                            <p class="p-faq">Not at all. Once you purchase a license, you'll receive all
                                                future releases for free.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--end faq single-->

                                <!--start faq single-->
                                <div class="card two">
                                    <div class="card-header" role="tab" id="faq2">
                                        <h5 class="mb-0">
                                            <a class="btn btn-light button-faq text-left" data-toggle="collapse"
                                                href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                <div class="">Do i need purchase a license for each website ?</div>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="faq2"
                                        data-parent="#accordion">
                                        <div class="card-body" style="background-color: #FE9754 ;">
                                            <p class="p-faq">Yes, you need to have a separate license for each website.
                                                You might need to purchase extended license for your web
                                                application.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end faq single-->

                                <!--start faq single-->
                                <div class="card two">
                                    <div class="card-header" role="tab" id="faq3">
                                        <h5 class="mb-0">
                                            <a class="btn btn-light button-faq text-left" data-toggle="collapse"
                                                href="#collapse3" aria-expanded="true" aria-controls="collapse3">What is
                                                regular license ?</a>
                                        </h5>
                                    </div>
                                    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="faq3"
                                        data-parent="#accordion">
                                        <div class="card-body" style="background-color: #FE9754 ;">
                                            <p class="p-faq">Regular license can be used for end products that do not
                                                charge users for access or service(access is free and there
                                                will be no monthly subscription fee). Single regular license can be used
                                                for single end product and end product can be
                                                used by you or your client. If you want to sell end product to multiple
                                                clients then you will need to purchase separate
                                                license for each client. The same rule applies if you want to use the
                                                same end product on multiple domains(unique
                                                setup). For more info on regular license you can check official
                                                description.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--end faq single-->

                                <!--start faq single-->
                                <div class="card two">
                                    <div class="card-header" role="tab" id="faq4">
                                        <h5 class="mb-0">
                                            <a class="btn btn-light button-faq text-left" data-toggle="collapse"
                                                href="#collapse4" aria-expanded="true" aria-controls="collapse3">What is
                                                extended license ?</a>
                                        </h5>
                                    </div>
                                    <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="faq4"
                                        data-parent="#accordion">
                                        <div class="card-body" style="background-color: #FE9754 ;">
                                            <p class="p-faq">Extended license can be used for end products(web service
                                                or SAAS) that charges users for access or service(e.g: monthly
                                                subscription fee). Single extended license can be used for single end
                                                product and end product can be used by you or your
                                                client. If you want to sell end product to multiple clients then you
                                                will need to purchase separate extended license for
                                                each client. The same rule applies if you want to use the same end
                                                product on multiple domains(unique setup). For more
                                                info on extended licenses you can check official description.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--end faq single-->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        {{-- last content 7 --}}

        {{-- content 8 --}}
        <section class="content">
            <h2 class="h-content text-center">Select Plan</h2>
        </section>
        <div class="jumbotron content-plan">
            <div class="container ">
                <div class="row text-center justify-content-center ">
                    <div class="col-lg-4 mr-3">
                        <div class="License1 shadow-lg">
                            Regular License
                        </div>
                        <div class="price-reguler bg-dark shadow-lg ">
                            <h1 class="h1-price">32$</h1>
                            <p class="p-price">Single USe</p> <br>
                            <div class="text-left ml-3">
                                <i class="bx bxs-bullseye ml-1"></i>
                                <span class="ml-3 ">6 Months Premium Support Included </span> <br>
                                <i class="bx bxs-bullseye ml-1 mt-3"></i><span class="ml-3 ">Pricing include all the
                                    taxes</span>
                                <br>
                                <i class="bx bxs-bullseye ml-1 mt-3"></i><span class="ml-3 ">Lifetime Free Update</span>
                                <br>
                            </div>
                            <button class="btn btn-main btn-round shadow-lg mt-5">Purchase</button>
                        </div>
                    </div>
                    <div class="col-lg-4 ml-3">
                        <div class="License2 shadow-lg ">
                            Extended License
                        </div>
                        <div class="price-extended bg-white shadow-lg ">
                            <h1 class="h1-extended">799$</h1>
                            <p class="p-extended">Multiple USe</p> <br>
                            <div class="text-left ml-3">
                                <i class="bx bxs-bullseye ml-1"></i>
                                <span class="ml-3 ">6 Months Premium Support Included </span> <br>
                                <i class="bx bxs-bullseye ml-1 mt-3"></i><span class="ml-3 ">Pricing include all the
                                    taxes</span>
                                <br>
                                <i class="bx bxs-bullseye ml-1 mt-3"></i><span class="ml-3 ">Lifetime Free Update</span>
                                <br>
                            </div>
                            <button class="btn btn-main btn-round shadow-lg mt-5">Purchase</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- last content 8 --}}
        {{-- content 9 --}}
        <section class="footer">
            <h2 class="text-footer text-center mt-3">Flexy 2020</h2>
        </section>
        {{-- last content 9 --}}

    </div>
</div>
{{-- last Section --}}


</div>
@endsection