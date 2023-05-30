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
            <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none" style="background-color: #fff !important;">
                <div class="container flex-lg-column">
                    <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                        <div class="navbar-brand"><a href="index.html"><img src="{{ asset('img/mkulima.png') }}"
                                    width="180px" alt="" /></a></div>
                        <div class="navbar-other m-auto">
                            <ul class="navbar-nav flex-row align-items-center">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Nyumbani</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Habari</a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Hari ya hewa</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Bei</a>
                                    </li>
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Wakala</a>
                                        <!--/.dropdown-menu -->
                                    </li>
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"></a>
                                        <!--/.dropdown-menu -->
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        <div class="navbar-other ms-auto">
                            <ul class="navbar-nav flex-row align-items-center">
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Ingia') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Jisajili') }}</a>
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
                                <h4>Bei za mazao</h4>
                                <p class="mb-2">Angalia orodha ya bei elekezi ya mazao katika eneo ulilopo.</p>
                                <a href="#" class="more hover link-yellow">Ingia zaidi</a>
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
                                <h4>Habari za kilimo</h4>
                                <p class="mb-2">Angalia taarifa mbalimbali zinazohusu kilimo.</p>
                                <a href="#" class="more hover link-green">Ingia zaidi </a>
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
                                <h4>Taarifa ya hari ya hewa</h4>
                                <p class="mb-2">Ijue hali ya hewa katika maeneo tofauti.</p>
                                <a href="#" class="more hover link-orange">Ingia zaidi</a>
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
                                <h4>Mawakala wa kilimo</h4>
                                <p class="mb-2">Wajue mawakala wa kilimo katika kanda uliyopo.</p>
                                <a href="#" class="more hover link-blue">Ingia zaidi</a>
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
            <div class="container py-14 py-md-17">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i5.png') }}" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7">Umeona uharamia wowote wa kilimo?, Usiogope kutupatia taarifa hiyo.</h3>
                        
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>222 333 000</p>
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
                        <p class="mb-4">© @php echo date('Y'); @endphp

                            {{ config('app.name', 'Laravel') }}. <br class="d-none d-lg-block" />All rights reserved.
                        </p>

                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Mawasiliano</h4>
                        <address class="pe-xl-15 pe-xxl-17">Bandari St. 14 Dar es salaam, Tanzania
                        </address>
                        <a href="/l/email-protection.html#d3f0" class="link-body"><span class="__cf_email__"
                                data-cfemail="b2dbdcd4ddf2d7dfd3dbde9cd1dddf">[email&#160;protected]</span></a><br />
                        222 333 111
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
               
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
