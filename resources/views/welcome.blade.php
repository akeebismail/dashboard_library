<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('count/src/js/jQuery.countdownTimer.js')}}"></script>
        <!-- Good alternative is to include minified file jQuery.countdownTimer.min.js -->
        <link rel="stylesheet" type="text/css" href="{{asset('count/src/css/jQuery.countdownTimer.css')}}" />
        <!-- For regional language support, include below file -->
        <!--<script type="text/javascript" src="js/localisation/jQuery.countdownTimer-[region-code].js"></script>-->
    </head>
    <body>
    <div id="countdowntimer"><span id="future_date"></span></div>

    <script type="text/javascript">
        $(function(){
            $("#future_date").countdowntimer({
                dateAndTime : "2020/01/01 00:00:00",
                size : "lg"
            });
        });
    </script>
    </body>
</html>
