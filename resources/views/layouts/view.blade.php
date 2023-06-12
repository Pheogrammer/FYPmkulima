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
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none" style="background-color: #fff !important;">
                <div class="container flex-lg-column">
                    <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                        <div class="navbar-brand"><a href="/"><img src="{{ asset('img/mkulima.png') }}"
                                    width="180px" alt="" /></a></div>
                        <div class="navbar-other m-auto">
                            <ul class="navbar-nav flex-row align-items-center">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="/"
                                            data-bs-toggle="dropdown">Nyumbani</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Habari</a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Hali ya hewa</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="{{route('bei')}}">Bei</a>
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
        <main class="py-4">
            @yield('content')
        </main>

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
                        <a href="#" class="link-body"><span class="__cf_email__"
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
