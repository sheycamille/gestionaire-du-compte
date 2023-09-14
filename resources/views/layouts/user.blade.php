<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ \App\Models\Setting::getValue('site_name') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('user/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="icon" href="{{ asset('front/favicon.png') }}" type="image/png" />

    @yield('css')

</head>

</html>

<body>

    <div class="container-scroller">

        @include('user.navbar')

        <div class="container-fluid page-body-wrapper">

            @include('user.sidenav')

            <div class="main-panel">
                <div class="content-wrapper">

                    @yield('content')

                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid d-flex justify-content-center">
                            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                                Gestion Du Compte 2023</span>
                        </div>
                    </footer>
                </div>
            </div>



        </div>

    </div>





    <script src="{{ asset('user/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('user/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('user/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('user/js/off-canvas.js')}}"></script>
    <script src="{{ asset('user/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('user/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('user/js/dashboard.js')}}"></script>
    <script src="{{ asset('user/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->

    @yield('javascript')


</body>

</html>
