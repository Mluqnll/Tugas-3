<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastyle - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('public/superadmin')}}/assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="{{url('public/superadmin')}}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="{{url('public/superadmin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/superadmin')}}/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="{{url('public/superadmin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/superadmin')}}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/superadmin')}}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/superadmin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        @include('admin.layout.sidebar')
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('admin.layout.header')
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                @yield('content')

                @include('admin.layout.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{url('public/superadmin')}}/assets/js/jquery.min.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/metismenu.min.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/waves.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/feather.min.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/simplebar.min.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/jquery-ui.min.js"></script>
        <script src="{{url('public/superadmin')}}/assets/js/moment.js"></script>
        <script src="{{url('public/superadmin')}}/plugins/daterangepicker/daterangepicker.js"></script>

        <script src="{{url('public/superadmin')}}/plugins/apex-charts/apexcharts.min.js"></script>
        <script src="{{url('public/superadmin')}}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{url('public/superadmin')}}/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="{{url('public/superadmin')}}/assets/pages/jquery.analytics_dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{url('public/superadmin')}}/assets/js/app.js"></script>
        
    </body>

</html>