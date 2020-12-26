<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/font-awesome.min.css')}} ">

    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->

    <link rel="stylesheet" href="{{ asset('backend_new/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/animate.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ asset('backend_new/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/normalize.css')}}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/c3.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend_new/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('backend_new/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    @yield('content')
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('backend_new/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('backend_new/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('backend_new/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('backend_new/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('backend_new/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('backend_new/js/jquery.scrollUp.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('backend_new/js/wow/wow.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('backend_new/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('backend_new/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{ asset('backend_new/js/counterup/counterup-active.js')}}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{ asset('backend_new/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('backend_new/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('backend_new/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{ asset('backend_new/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('backend_new/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('backend_new/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('backend_new/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('backend_new/js/flot/Chart.min.js')}}"></script>
    <script src="{{ asset('backend_new/js/flot/dashtwo-flot-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('backend_new/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/tableExport.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/data-table-active.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ asset('backend_new/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('backend_new/js/main.js')}}"></script>
    <script src="{{ asset('backend_new/js/highchart/highchart.js')}}"></script>
</body>

</html>