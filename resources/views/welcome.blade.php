<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/orange.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none">
                <div class="container flex-lg-column">
                    <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                        <div class="navbar-brand"><a href="index.html"><img src="{{ asset('img/mkulima.png') }}"
                                    width="180px" alt="" /></a></div>
                        <div class="navbar-other ms-auto">
                            <ul class="navbar-nav flex-row align-items-center">
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.d-flex -->
                    <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center">
                        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                            <div class="offcanvas-header d-lg-none">
                                <h3 class="text-white fs-30 mb-0">{{ config('app.name', 'Laravel') }}</h3>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body d-flex flex-column h-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Demos</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Pages</a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Projects</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Blog</a>
                                    </li>
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Blocks</a>
                                        <!--/.dropdown-menu -->
                                    </li>
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Documentation</a>
                                        <!--/.dropdown-menu -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.navbar-collapse-wrapper -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->

            <!-- /.offcanvas -->
        </header>
        <!-- /header -->

        <!--/.modal -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-15 pt-md-14">

            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16 pb-md-17">
                <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-yellow">
                            <div class="card-body">
                                <img src="{{ asset('img/icons/lineal/browser.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                <h4>Content Marketing</h4>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta
                                    gravida at eget metus cras justo.</p>
                                <a href="#" class="more hover link-yellow">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-green">
                            <div class="card-body">
                                <img src="{{ asset('img/icons/lineal/chat-2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                                <h4>Social Engagement</h4>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta
                                    gravida at eget metus cras justo.</p>
                                <a href="#" class="more hover link-green">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-orange">
                            <div class="card-body">
                                <img src="{{ asset('img/icons/lineal/id-card.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                                <h4>Identity & Branding</h4>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta
                                    gravida at eget metus cras justo.</p>
                                <a href="#" class="more hover link-orange">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-blue">
                            <div class="card-body">
                                <img src="{{ asset('img/icons/lineal/gift.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                                <h4>Product Design</h4>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta
                                    gravida at eget metus cras justo.</p>
                                <a href="#" class="more hover link-blue">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i8.png') }}" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7">Our three process steps on creating awesome projects.</h3>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                        class="number fs-18">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Collect Ideas</h4>
                                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo
                                    cursus. Donec ullamcorper nulla non metus.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                        class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Data Analysis</h4>
                                <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada
                                    magna auctor fringilla augue.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                        class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Finalize Product</h4>
                                <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla
                                    sed. Nulla vitae elit libero pharetra.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i2.png') }}" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7 mt-lg-10">Few reasons why our valued customers choose us.</h3>
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"> Professional Design </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                            fermentum. Praesent commodo cursus magna, vel.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                            fermentum. Praesent commodo cursus magna, vel.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"> Header and Slider Options </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                            fermentum. Praesent commodo cursus magna, vel.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                        </div>
                        <!--/.accordion -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-14 pt-md-17 pb-md-20">
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                    <div class="col-lg-4 text-center text-lg-start">
                        <h3 class="display-4 mb-3 pe-xl-15">We are proud of our works</h3>
                        <p class="lead fs-lg mb-0 pe-xxl-10">We bring solutions to make life easier for our customers.
                        </p>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-8 mt-lg-2">
                        <div class="row align-items-center counter-wrapper gy-6 text-center">
                            <div class="col-md-4">
                                <img src="{{ asset('img/icons/lineal/check.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h3 class="counter">7518</h3>
                                <p>Completed Projects</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <img src="{{ asset('img/icons/lineal/user.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h3 class="counter">3472</h3>
                                <p>Happy Customers</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <img src="{{ asset('img/icons/lineal/briefcase-2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h3 class="counter">2184</h3>
                                <p>Expert Employees</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16 pb-md-17">
                <div class="grid mb-14 mb-md-18 mt-3">
                    <div class="row isotope gy-6 mt-n19 mt-md-n22">
                        <div class="item col-md-6 col-xl-3">
                            <div class="card shadow-lg card-border-bottom border-soft-primary">
                                <div class="card-body">
                                    <span class="ratings five mb-3"></span>
                                    <blockquote class="icon mb-0">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum id ligula porta. Cras mattis consectetur.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/column -->
                        <div class="item col-md-6 col-xl-3">
                            <div class="card shadow-lg card-border-bottom border-soft-primary">
                                <div class="card-body">
                                    <span class="ratings five mb-3"></span>
                                    <blockquote class="icon mb-0">
                                        <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa
                                            justo sit amet purus sit amet fermentum.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Cory Zamora</h5>
                                                <p class="mb-0">Marketing Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/column -->
                        <div class="item col-md-6 col-xl-3">
                            <div class="card shadow-lg card-border-bottom border-soft-primary">
                                <div class="card-body">
                                    <span class="ratings five mb-3"></span>
                                    <blockquote class="icon mb-0">
                                        <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet
                                            rutrum faucibus dolor eu rutrum. Nulla vitae libero.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Nikolas Brooten</h5>
                                                <p class="mb-0">Sales Manager</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/column -->
                        <div class="item col-md-6 col-xl-3">
                            <div class="card shadow-lg card-border-bottom border-soft-primary">
                                <div class="card-body">
                                    <span class="ratings five mb-3"></span>
                                    <blockquote class="icon mb-0">
                                        <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus
                                            rhoncus eu tincidunt auctor nullam rutrum, pharetra augue.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid-view -->
                <div class="projects-tiles">
                    <div class="project grid grid-view">
                        <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope">
                            <div class="item col-md-6 mt-md-7 mt-lg-15">
                                <div
                                    class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
                                    <div class="post-header">
                                        <h2 class="display-4 mb-4 pe-xxl-15">Check out some of our recent projects
                                            below.</h2>
                                        <p class="lead fs-lg mb-0">We love to turn ideas into beautiful things.</p>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item col-md-6">
                                <figure class="lift rounded mb-6"><a href="single-project3.html"> <img
                                            src="{{ asset('img/photos/rp1.jpg') }}" alt="" /></a>
                                </figure>
                                <div class="post-category text-line mb-2 text-violet">Stationary</div>
                                <h2 class="post-title h3">Ipsum Ultricies Cursus</h2>
                            </div>
                            <!-- /.item -->
                            <div class="item col-md-6">
                                <figure class="lift rounded mb-6"><a href="single-project2.html"> <img
                                            src="{{ asset('img/photos/rp2.jpg') }}" alt="" /></a>
                                </figure>
                                <div class="post-category text-line mb-2 text-leaf">Invitation</div>
                                <h2 class="post-title h3">Mollis Ipsum Mattis</h2>
                            </div>
                            <!-- /.item -->
                            <div class="item col-md-6">
                                <figure class="lift rounded mb-6"><a href="single-project.html"> <img
                                            src="{{ asset('img/photos/rp3.jpg') }}" alt="" /></a>
                                </figure>
                                <div class="post-category text-line mb-2 text-purple">Notebook</div>
                                <h2 class="post-title h3">Magna Tristique Inceptos</h2>
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.project -->
                </div>
                <!-- /.projects-tiles -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-14 py-md-17">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i5.png') }}" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Moonshine St. 14/05 Light City, London</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>00 (123) 456 78 90</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0"><a
                                        href="/l/email-protection.html#691a08070d0b0611290c04080005470a0604"
                                        class="link-body"><span class="__cf_email__"
                                            data-cfemail="abd8cac5cfc9c4d3ebcec6cac2c785c8c4c6">[email&#160;protected]</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('img/mkulima.png') }}" width="180px" alt="" />
                        <p class="mb-4">© 2023 {{ config('app.name', 'Laravel') }}. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social ">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom
                        </address>
                        <a href="/l/email-protection.html#d3f0" class="link-body"><span class="__cf_email__"
                                data-cfemail="b2dbdcd4ddf2d7dfd3dbde9cd1dddf">[email&#160;protected]</span></a><br />
                        00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Learn More</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form
                                    action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                    method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                    class="validate " target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL"
                                                class="required email form-control" placeholder="Email Address"
                                                id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response2" style="display:none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    {{-- <script src="{{ asset('js/theme.js') }}"></script> --}}
</body>


</html>
