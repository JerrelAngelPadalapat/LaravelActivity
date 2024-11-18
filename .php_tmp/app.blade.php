@include('partials/main')

<head>
    <?php
    $title = "Dashboard"; ?>
    @include('partials/title-meta')

    <!-- Plugins css -->
    <link href="{{ asset('template/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

    @include('partials/head-css')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('partials/menu')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            @include('partials/topbar')

            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- container -->

            </div> <!-- content -->

            @include('partials/footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('partials/right-sidebar')

    @include('partials/footer-scripts')

    <!-- Plugins js-->
    <script src="{{ asset('template/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('template/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/libs/selectize/js/standalone/selectize.min.js') }}"></script>

</body>

</html>