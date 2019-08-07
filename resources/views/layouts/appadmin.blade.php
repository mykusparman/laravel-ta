<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('assetss') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assetss') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('assetss') }}/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('assetss') }}/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('assetss') }}/css/main.min.css" rel="stylesheet" />\
    <!-- SUMMER NOTE-->
    <link rel="stylesheet"  href="{{ asset('assetss') }}/summernote/summernote.css">

    @stack('style')
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-SIDEBAR -->
        @include('layouts.sidebar')
        <!-- END HEADER-SIDEBAR -->

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <!-- TEU BUTUH -->
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{ asset('assetss') }}/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('assetss') }}/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{ asset('assetss') }}/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('assetss') }}/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('assetss') }}/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    <!-- SUMMER NOTE SCRIPTS-->
    <script src="{{ asset('assetss') }}/summernote/summernote.js" type="text/javascript"></script>
    @stack('script')
</body>

</html>