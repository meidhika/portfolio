<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Portfolio Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('template/src/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('template/src/assets/images/LogoWeb.png') }}" />
</head>

<body style="background-color: black;">
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('inc.aside')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('inc/navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h1>@yield('user')</h1>
                    <h1>@yield('title')</h1>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                @include('sweetalert::alert')

                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('inc/footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/src/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('template/src/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('template/src/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('template/src/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/src/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/misc.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/settings.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('template/src/assets/js/proBanner.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
</body>

</html>
