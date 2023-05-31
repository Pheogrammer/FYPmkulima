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
                                            data-bs-toggle="dropdown"Hali ya hewa</a>
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
                <div class="col">
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
                    <div class="col">
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
                    <div class="col">
                        <div class="card shadow-lg card-border-bottom border-soft-orange">
                            <div class="card-body">
                                <img src="{{ asset('img/icons/lineal/id-card.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                                <h4>Mabadiliko ya hali ya hewa</h4>
                                <p class="mb-2">Ijue hali ya hewa katika maeneo tofauti.</p>
                                <a href="#" class="more hover link-orange">Ingia zaidi</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col">
                        <div class="card shadow-lg card-border-bottom border-soft-orange">
                            <div class="card-body">
                                <img src="{{ asset('img/icons/lineal/id-card.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                                <h4>Jisajili</h4>
                                <p class="mb-2">Jisajili kupitia wavuti hii ili kupata dondoo za kilimo kwanjia ya SMS.</p>
                                <a href="#" class="more hover link-green">Ingia zaidi</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                </div>
                <!--/.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i8.png') }}" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7">Pata mabadiliko ya bei za mazao mbalimbali kwa haraka na kwa uhakika.</h3>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                        class="number fs-18">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Ingia kwenye mfumo</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                        class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Ingiza taarifa za kanda uliopo</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                        class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Angalia bei ya zao unalotaka</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                
            </div>
            <!-- /.container -->
        </section>
     

        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-2 py-md-10">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i5.png') }}" alt="" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7">Pata dondoo za kilimo kiganjani mwako kupitia simu yako.</h3>
                        
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                        class="number fs-18">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Piga *150*77#</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                        class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Jisajili</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                        class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Kaa tayari kupokea dondoo kwa njia ya ujumbe mfupi</h4>
                                <p class="mb-0"></p>
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
        <div class="container py-13 py-md-15 ">
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
