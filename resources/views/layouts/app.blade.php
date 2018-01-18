<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Library') }}</title>

    <!-- Styles -->
    <script type="text/javascript" src="{{asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('count/src/js/jQuery.countdownTimer.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('count/src/css/jQuery.countdownTimer.css')}}" />

    <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/default-dark.css')}}" id="theme" rel="stylesheet">

    @yield('stylesheet')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>

<div id="app main-wrapper">
    <header class="topbar">
        @yield('head')
    </header>
    @yield('sidebar')

    <div class="page-wrapper">
        <div class="container-fluid">
            @yield('dashboard')
        </div>
        <footer class="footer">
            © 2017 OAU Library Dashboard
        </footer>
    </div>
</div>

    <!-- Scripts -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>

    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $("#future_date").countdowntimer({
            dateAndTime : "2018-01-18 23:00:00",
            size : "lg"
        });
    });
</script>

    @yield('script')

</body>
</html>
