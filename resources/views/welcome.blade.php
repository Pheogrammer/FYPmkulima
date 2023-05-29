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
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
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
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
                                <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body d-flex flex-column h-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Demos</a>
                                        <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                            <li class="mega-menu-content mega-menu-scroll">
                                                <ul
                                                    class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo1.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi1.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 1</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo2.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi2.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 2</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo3.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi3.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 3</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo4.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi4.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 4</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo5.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi5.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 5</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo6.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi6.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 6</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo7.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi7.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 7</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo8.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi8.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 8</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo9.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi9.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 9</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo10.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi10.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 10</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo11.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi11.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 11</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo12.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi12.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo13.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi13.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 13</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo14.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi14.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 14</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo15.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi15.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 15</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo16.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi16.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 16</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo17.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi17.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 17</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo18.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi18.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 18</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo19.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi19.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 19</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo20.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi20.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 20</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo21.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi21.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 21</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo22.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi22.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 22</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo23.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi23.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 23</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo24.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi24.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 24</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo25.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi25.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 25</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo26.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi26.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 26</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo27.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi27.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 27</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo28.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi28.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 28</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo29.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi29.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 29</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo30.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi30.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 30</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo31.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi31.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 31</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo32.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi32.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 32</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo33.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi33.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 33</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="demo34.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{ asset('img/demos/mi34.jpg') }}"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 34</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--/.row -->
                                                <span class="d-none d-lg-flex"><i
                                                        class="uil uil-direction"></i><strong>Scroll to view
                                                        more</strong></span>
                                            </li>
                                            <!--/.mega-menu-content-->
                                        </ul>
                                        <!--/.dropdown-menu -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="services.html">Services I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="services2.html">Services II</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">About</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="about.html">About I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="about2.html">About II</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Shop</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="shop.html">Shop I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="shop2.html">Shop II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="shop-product.html">Product Page</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="shop-cart.html">Shopping Cart</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="shop-checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Contact</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="contact.html">Contact I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="contact2.html">Contact II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="contact3.html">Contact III</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Career</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="career.html">Job Listing I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="career2.html">Job Listing II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="career-job.html">Job Description</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Utility</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item" href="404.html">404
                                                            Not Found</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="page-loader.html">Page Loader</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="signin.html">Sign In I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="signin2.html">Sign In II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="signup.html">Sign Up I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="signup2.html">Sign Up II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="terms.html">Terms</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="pricing.html">Pricing</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="onepage.html">One
                                                    Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Projects</a>
                                        <div class="dropdown-menu dropdown-lg">
                                            <div class="dropdown-lg-content">
                                                <div>
                                                    <h6 class="dropdown-header">Project Pages</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="projects.html">Projects
                                                                I</a></li>
                                                        <li><a class="dropdown-item" href="projects2.html">Projects
                                                                II</a></li>
                                                        <li><a class="dropdown-item" href="projects3.html">Projects
                                                                III</a></li>
                                                        <li><a class="dropdown-item" href="projects4.html">Projects
                                                                IV</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.column -->
                                                <div>
                                                    <h6 class="dropdown-header">Single Projects</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="single-project.html">Single
                                                                Project I</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="single-project2.html">Single Project II</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="single-project3.html">Single Project III</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="single-project4.html">Single Project IV</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.column -->
                                            </div>
                                            <!-- /auto-column -->
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="blog.html">Blog
                                                    without Sidebar</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="blog2.html">Blog with
                                                    Sidebar</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="blog3.html">Blog with
                                                    Left Sidebar</a></li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Blog Posts</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="blog-post.html">Post without Sidebar</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="blog-post2.html">Post with Sidebar</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="blog-post3.html">Post with Left Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Blocks</a>
                                        <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                            <li class="mega-menu-content">
                                                <ul
                                                    class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/about.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block1.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>About</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/blog.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block2.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Blog</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/call-to-action.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block3.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Call to Action</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/clients.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block4.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Clients</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/contact.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block5.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Contact</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/facts.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block6.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Facts</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/faq.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block7.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/features.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block8.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Features</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/footer.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block9.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Footer</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/hero.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block10.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Hero</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/misc.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block17.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Misc</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/navbar.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block11.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Navbar</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/portfolio.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block12.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Portfolio</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/pricing.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block13.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Pricing</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/process.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block14.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Process</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/team.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block15.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Team</span>
                                                        </a>
                                                    </li>
                                                    <li class="col"><a class="dropdown-item"
                                                            href="docs/blocks/testimonials.html">
                                                            <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2">
                                                                <img class="rounded-0"
                                                                    src="{{ asset('img/demos/block16.svg') }}"
                                                                    alt="">
                                                            </div>
                                                            <span>Testimonials</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--/.row -->
                                            </li>
                                            <!--/.mega-menu-content-->
                                        </ul>
                                        <!--/.dropdown-menu -->
                                    </li>
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Documentation</a>
                                        <ul class="dropdown-menu mega-menu">
                                            <li class="mega-menu-content">
                                                <div class="row gx-0 gx-lg-3">
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-header">Usage</h6>
                                                        <ul class="list-unstyled cc-2 pb-lg-1">
                                                            <li><a class="dropdown-item" href="docs/index.html">Get
                                                                    Started</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/forms.html">Forms</a></li>
                                                            <li><a class="dropdown-item" href="docs/faq.html">FAQ</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/changelog.html">Changelog</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/credits.html">Credits</a></li>
                                                        </ul>
                                                        <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                                                        <ul class="list-unstyled cc-2">
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/colors.html">Colors</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/fonts.html">Fonts</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/icons-svg.html">SVG Icons</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/icons-font.html">Font
                                                                    Icons</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/illustrations.html">Illustrations</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/backgrounds.html">Backgrounds</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/styleguide/misc.html">Misc</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-lg-8">
                                                        <h6 class="dropdown-header">Elements</h6>
                                                        <ul class="list-unstyled cc-3">
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/accordion.html">Accordion</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/alerts.html">Alerts</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/animations.html">Animations</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/avatars.html">Avatars</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/background.html">Background</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/badges.html">Badges</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/buttons.html">Buttons</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/card.html">Card</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/carousel.html">Carousel</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/dividers.html">Dividers</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/form-elements.html">Form
                                                                    Elements</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/image-hover.html">Image
                                                                    Hover</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/image-mask.html">Image Mask</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/lightbox.html">Lightbox</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/player.html">Media Player</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/modal.html">Modal</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/pagination.html">Pagination</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/progressbar.html">Progressbar</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/shadows.html">Shadows</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/shapes.html">Shapes</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/tables.html">Tables</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/tabs.html">Tabs</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/text-animations.html">Text
                                                                    Animations</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/text-highlight.html">Text
                                                                    Highlight</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/tiles.html">Tiles</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/tooltips-popovers.html">Tooltips
                                                                    & Popovers</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="docs/elements/typography.html">Typography</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                </div>
                                                <!--/.row -->
                                            </li>
                                            <!--/.mega-menu-content-->
                                        </ul>
                                        <!--/.dropdown-menu -->
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="offcanvas-footer d-lg-none">
                                    <div>
                                        <a href="/l/email-protection.html#e08689929394ce8c819394a0858d81898cce838f8d"
                                            class="link-inverse"><span class="__cf_email__"
                                                data-cfemail="533a3d353c13363e323a3f7d303c3e">[email&#160;protected]</span></a>
                                        <br /> 00 (123) 456 78 90 <br />
                                        <nav class="nav social social-white mt-4">
                                            <a href="#"><i class="uil uil-twitter"></i></a>
                                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            <a href="#"><i class="uil uil-dribbble"></i></a>
                                            <a href="#"><i class="uil uil-instagram"></i></a>
                                            <a href="#"><i class="uil uil-youtube"></i></a>
                                        </nav>
                                        <!-- /.social -->
                                    </div>
                                </div>
                                <!-- /.offcanvas-footer -->
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other ms-auto w-100 d-none d-lg-block">
                            <nav class="nav social social-muted justify-content-end text-end">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.navbar-collapse-wrapper -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
            <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pb-6">
                    <div class="widget mb-8">
                        <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution
                            for your business.</p>
                    </div>
                    <!-- /.widget -->
                    <div class="widget mb-8">
                        <h4 class="widget-title text-white mb-3">Contact Info</h4>
                        <address> Moonshine St. 14/05 <br /> Light City, London </address>
                        <a href="/l/email-protection.html#12747b6061663c7e73616652777f737b7e3c717d7f"><span
                                class="__cf_email__"
                                data-cfemail="9cf5f2faf3dcf9f1fdf5f0b2fff3f1">[email&#160;protected]</span></a><br />
                        00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                    <div class="widget mb-8">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Follow Us</h4>
                        <nav class="nav social social-white">
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
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.offcanvas -->
        </header>
        <!-- /header -->
        <div class="modal fade modal-popup" id="modal-02" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <figure class="mb-6"><img src="{{ asset('img/illustrations/i7.png') }}"
                                        alt="" /></figure>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <h3>Join the mailing list and get %10 off</h3>
                        <p class="mb-6">Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla
                            non metus auctor fringilla.</p>
                        <div class="newsletter-wrapper">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <!-- Begin Mailchimp Signup Form -->
                                    <div id="mc_embed_signup">
                                        <form
                                            action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                            method="post" id="mc-embedded-subscribe-form"
                                            name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                            novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                <div class="mc-field-group input-group form-floating">
                                                    <input type="email" value="" name="EMAIL"
                                                        class="required email form-control"
                                                        placeholder="Email Address" id="mce-EMAIL">
                                                    <label for="mce-EMAIL">Email Address</label>
                                                    <input type="submit" value="Join" name="subscribe"
                                                        id="mc-embedded-subscribe" class="btn btn-primary">
                                                </div>
                                                <div id="mce-responses" class="clear">
                                                    <div class="response" id="mce-error-response"
                                                        style="display:none"></div>
                                                    <div class="response" id="mce-success-response"
                                                        style="display:none"></div>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text"
                                                        name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                                        value="">
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--End mc_embed_signup-->
                                </div>
                                <!-- /.newsletter-wrapper -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!--/.modal-body -->
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-dialog -->
        </div>
        <!--/.modal -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0"
                        data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Creative. Smart. Awesome.</h1>
                        <p class="lead fs-lg mb-7">We specialize in web, mobile and identity design. We love to turn
                            ideas into beautiful things.</p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                            data-group="page-title-buttons" data-delay="900">
                            <span><a class="btn btn-primary rounded me-2">See Projects</a></span>
                            <span><a class="btn btn-yellow rounded">Learn More</a></span>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7" data-cue="slideInDown">
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i6.png') }}" alt="" />
                        </figure>
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
                        <figure><img class="w-auto" src="{{ asset('img/illustrations/i5.png') }}"
                                alt="" /></figure>
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
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                        class="uil uil-phone-volume"></i> </div>
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
                        <img class="mb-4" src="{{ asset('img/mkulima.png') }}" width="180px"
                            alt="" />
                        <p class="mb-4">© 2023 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
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
                                    method="post" id="mc-embedded-subscribe-form2"
                                    name="mc-embedded-subscribe-form" class="validate " target="_blank"
                                    novalidate>
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
