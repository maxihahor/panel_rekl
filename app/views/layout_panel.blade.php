<html>
    <head>
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <link rel="icon" href="{{URL::asset('img/logo1.png')}}">

        <script src="{{URL::asset('js/bootstrap.js')}}"></script>
        <title>
            Opoltrans - obsługa reklamacji
        </title>
    </head>

    <style>
        .vertical-center
        {
            position: absolute;
            left: 10%;
            width:80%;
            border-color: #064c96;
        }
        .header-page
        {
            padding-top: 32px;
            padding-bottom: 32px;
        }
        .logo
        {
            vertical-align: middle;
        }

        .header-page .logo img
        {
            max-width: 363px;
            width: 100%;
        }

        .header-page .logo
        {
            display: inline-block;
            margin-right: 25px;
        }

        .header-page .gau
        {
            display: inline-block;
        }

        .content
        {
            padding-bottom: 30%;
        }
        .container {
             max-width: 1170px;
             width: 100%;
        }

    </style>

    <body>

    <header class="container header-page">
        <div class="row">
            <div class="col-md-7">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{URL::asset('img/logo_1.png')}}"></a>
                </div>
                <div class="gau hidden-xs">
                    <img src="{{URL::asset('img/group-truck.png')}}">
                </div>
            </div>
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-md-offset-11 col-md-1">
                        <a href="#">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div>


    <div class="container">
        <div class="panel panel-default vertical-center">
            <div class="panel-body content"  style="height: 3000px">
                OPOLTRANS
            </div>
        </div>
    </div>
    </div>

    <nav class="navbar navbar-default navbar-ot" id="nav_bar">
        <div class="container">

        </div>
    </nav>


    <div class="footer">
        <div class="contact">
            <div class="col-lg-1 col-md-2 hidden-sm hidden-xs">
                OPOLTRANS
            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                Dział Reklamacji
            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                <span class="glyphicon glyphicon-earphone"></span> 77 40 99 608
            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                <span class="glyphicon glyphicon-earphone"></span> 77 40 99 619
            </div>
            <div class="col-lg-2 col-md-3 hidden-sm hidden-xs">
                <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:reklamacje@opoltrans.com.pl">reklamacje@opoltrans.com.pl</a>
            </div>
            <div class="col-lg-3 col-md-2">
                &copy 1993 - 2017 Wszelkie prawa zastrzeżone
            </div>
        </div>
    </div>

    </body>

    <script>
        $(document).ready(function() {

            $(window).scroll(function () {
                //if you hard code, then use console
                //.log to determine when you want the
                //nav bar to stick.
                console.log($(window).scrollTop())
                if ($(window).scrollTop() > 115) {
                    $('#nav_bar').addClass('navbar-fixed-top');
                }
                if ($(window).scrollTop() < 115) {
                    $('#nav_bar').removeClass('navbar-fixed-top');
                }
            });
        });
    </script>

</html>

