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
    }

    .navbar-default
    {
        background-color: #064c96;
    }

    .dropdown-menu li a
    {
        color: white;
    }

    .dropdown-menu li a:hover
    {
        color: #064c96;
        background-color: white;
    }

    .log-in
    {
        border-radius: 5px;
        border: 1px solid #064c96;
        padding: 10px;
        widht:100%;
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
            <div class="col-md-offset-2 col-md-3 hidden-sm hidden-xs">
                <div class="row log-in">
                    @if(Auth::check())
                        <div class="col-sm-6">
                            <span class="glyphicon glyphicon-user"></span> {{Auth::user()->nip}}
                        </div>
                        <div class="col-sm-6">
                            <span class="glyphicon glyphicon-log-in"></span>{{link_to('/logout', ' Wyloguj')}}
                        </div>
                    @else
                        <div class="col-sm-offset-6 col-sm-6">
                            <span class="glyphicon glyphicon-log-in"></span> Zaloguj
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar">
                <div class="navbar-header">

                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color: #064c9f; color: white; ">
                            REKLAMACJE <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" style="background-color: #054187; color: white; border: 1px solid white;">
                            <li><a href="{{url('/panel/inprog')}}">W TOKU</a></li>
                            <li><a href="{{url('/panel/complete')}}">ZAKOŃCZONE</a></li>
                            <li><a href="#">ODWOŁANIA</a></li>
                        </ul>
                    </li>
                    <li><a href="#">WSZYSTKIE REKLAMACJE</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    @if(Auth::user()->admin)
                        <li class="pull-right"><a href="{{url('/admin')}}">PANEL ADMINISTRACYJNY</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('panel-content')

    <div class="footer hidden-sm hidden-xs hidden-md">
        &copy Opoltrans 2017 Wszelkie prawa zastrzeżone
    </div>
</body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 10000
            })
        });

        // Add slideDown animation to Bootstrap dropdown when expanding.
        $('.dropdown').on('show.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        });

        // Add slideUp animation to Bootstrap dropdown when collapsing.
        $('.dropdown').on('hide.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        });

        @yield('script')
    </script>
</html>
