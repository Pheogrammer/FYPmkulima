<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} / @yield('title') </title>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-primary bg-ligth text shadow-sm"
            style="border-bottom: green  2px solid">
            <div class="container">
                <div class="navbar-brand"><a href="/"><img src="{{ asset('img/mkulima.png') }}" height="40px"
                            alt="" /></a></div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        @else
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('prices') }}">{{ __('Crop Prices') }}</a>

                            </li>
                        @endguest
                    </ul>
                    <ul class="navbar-nav m-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users') }}">{{ __('Users') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('agencies') }}">{{ __('Agency') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('region') }}">{{ __('Regions') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('zone') }}">{{ __('Zones') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('crops') }}">{{ __('Crops') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manageNews') }}">{{ __('News') }}</a>
                            </li>
                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif


                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('updateprofile') }}">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i> {{ __('Profile') }}
                                    </a>
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.regioned').DataTable({
                "pageLength": 5
            });
        });
        $(document).ready(function() {
            $('.cropped').DataTable({
                searching: false, // Disable search bar
                lengthChange: false,
                "pageLength": 5
            });
        });
    </script>
</body>

</html>
