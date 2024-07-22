<!doctype html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>
        @section('title')
            Analytics |
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.ico') }}" />

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ asset('assets_admin/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('assets_admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('assets_admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ asset('assets_admin/js/config.js') }}"></script>

</head>

<body>
    <!-- START Wrapper -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        @include('admin.layout.header')

        <!-- ========== Topbar End ========== -->

        <!-- ========== App Menu Start ========== -->
        @include('admin.layout.sidebar')

        <!-- ========== App Menu End ========== -->


        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">
            <!-- Start Container -->

            @yield('content')

            <!-- End Container -->

            <!-- ========== Footer Start ========== -->
            @include('admin.layout.footer')
            <!-- ========== Footer End ========== -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->
    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{ asset('assets_admin/js/vendor.js') }}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ asset('assets_admin/js/app.js') }}"></script>


    <!-- Vector Map Js -->
    <script src="{{ asset('assets_admin/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/jsvectormap/maps/world.js') }}"></script>

    <!-- Dashboard Js -->
    <script src="{{ asset('assets_admin/js/pages/dashboard.analytics.js') }}"></script>
</body>

<!-- Mirrored from techzaa.getappui.com/reback/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2024 07:55:20 GMT -->

</html>
