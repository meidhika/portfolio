<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>My Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('portfolio/img/LogoWeb.png') }}" rel="icon">
    <link href="{{ asset('portfolio/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('portfolio/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('portfolio/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('portfolio/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('portfolio/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('portfolio/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('portfolio/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex flex-column justify-content-center">

        <i class="header-toggle d-xl-none bi bi-list"></i>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('portfolio.hero') }}"
                        class="{{ Request::routeIs('portfolio.hero') ? 'active' : '' }}"><i
                            class="bi bi-house navicon"></i><span>Home</span></a></li>
                <li><a href="{{ route('portfolio.about') }}"
                        class="{{ Request::routeIs('portfolio.about') ? 'active' : '' }}"><i
                            class="bi bi-person navicon"></i><span>About</span></a></li>
                <li><a href="{{ route('portfolio.resume') }}"
                        class="{{ Request::routeIs('portfolio.resume') ? 'active' : '' }}"><i
                            class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
                <li><a href="{{ route('portfolio.project') }}"
                        class="{{ Request::routeIs('portfolio.project') ? 'active' : '' }}"><i
                            class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
                <li><a href="{{ route('portfolio.contact') }}"
                        class="{{ Request::routeIs('portfolio.contact') ? 'active' : '' }}"><i
                            class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
                <li><a href="{{ route('dashboard.index') }}"><i
                            class="bi bi-arrow-left-circle-fill navicon"></i><span>Dashboard</span></a>
                </li>
            </ul>
        </nav>

    </header>

    <main class="main">
        @yield('content')

        @include('sweetalert::alert')
    </main>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('portfolio/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('portfolio/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('portfolio/vendor/swiper/swiper-bundle.min.js') }}"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    <!-- Main JS File -->
    <script src="{{ asset('portfolio/js/main.js') }}"></script>

</body>

</html>
