<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('paper-dashboard-master/assets/img/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Batiknesia
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('paper-dashboard-master/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('paper-dashboard-master/assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('paper-dashboard-master/assets/demo/demo.css') }}" rel="stylesheet" />
    <style>
        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);
        body {
            background-color: #eee;
            font-family: 'Calibri', sans-serif !important;
        }
        .mt-100 {
            margin-top: 100px;

        }

        .card {
            margin-bottom: 30px;
            border: 0;
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            letter-spacing: .5px;
            border-radius: 8px;
            -webkit-box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
            box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
        }

        .card .card-header {
            background-color: #fff;
            border-bottom: none;
            padding: 24px;
            border-bottom: 1px solid #f6f7fb;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }

        .card .card-body {
            padding: 30px;
            background-color: transparent;
        }

        .btn-primary,
        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #4466f2 !important;
            border-color: #4466f2 !important;
        }
    </style>
    @yield('style')
</head>

<body class="">
    @yield('content')
    <!--   Core JS Files   -->

    <script src="{{ asset('paper-dashboard-master/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('paper-dashboard-master/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('paper-dashboard-master/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('paper-dashboard-master/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('paper-dashboard-master/assets/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('paper-dashboard-master/assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('paper-dashboard-master/assets/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript">
    </script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('paper-dashboard-master/assets/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
    @yield('script')
</body>

</html>
