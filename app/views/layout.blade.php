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
            @yield('title')
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

        .panel_main .container {
            width: 100%;
            max-width: 100%;
        }

        .login
        {
            background: url("{{URL::asset('img/bg-log.jpg')}}") bottom center no-repeat;
            background-size: cover;
            height: 80%;
            border-radius: 10px;
        }

        .login:after
        {
            background: #000000;
            opacity: 0.5;
        }

        .bg-login
        {
            max-width: 80%;
            border-radius: 10px;
            opacity: 0.7;
        }
        .login .panel
        {
            border: none;
            text-align: center;

        }

        .vcenter
        {

            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            word-wrap: break-word;
            background-color: rgba(255,255,255,0.8);

        }
        @media (min-width: 992px) {
            .login-form
            {
                max-width: 60%;
                margin: auto;
            }
        }
        @media (max-width: 767px)
        {
            .login-form
            {
                max-width: 80%;
                margin: auto;
            }
        }

        .sm-menu
        {
            vertical-align: middle;
        }
        @media (min-width: 768px) {
            .vertical {
                top: 40%;
                margin: auto;
                position: absolute;
            }
        }

        .panel-right
        {
            background: url("{{URL::asset('img/bg-log.jpg')}}") bottom center no-repeat;
            background-size: cover;
            height: 70%;
            padding: 7%;
        }
        @media(min-width: 992px)
        {
            .panel-left {
                background: url("{{URL::asset('img/panel-left-bg.png')}}") bottom center no-repeat;
            }
        }
            .panel-left {
                color: #fff;
                background-color: #064c96;
                background-size: cover;
                height: 70%;
                padding: 30px;
            }



        .login_form
        {
            background-color: rgba(255,255,255,0.8);
            color: #064c96;
            word-wrap: break-word;
            height: 100%;
            padding: 20px;
            text-align: center;
            overflow-y: hidden;
        }

        .log-in
        {
            text-align: center;
        }
        @yield('custom_style')
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
                <div class="col-md-offset-3 col-md-2 hidden-sm hidden-xs">
                    <div class="row log-in">
                            <span class="glyphicon glyphicon-log-in"></span> Zaloguj
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="footer hidden-sm hidden-xs hidden-md">
                &copy Opoltrans 2017 Wszelkie prawa zastrzeżone
        </div>

    </body>

    @yield('script')

</html>