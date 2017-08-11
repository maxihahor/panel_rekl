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
            width: 50%;
            height: 50%;
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            word-wrap: break-word;
            background-color: rgba(255,255,255,0.8);

        }
        @media (min-width: 992px) {
            .login-form
            {
                max-width: 80%;
                margin: auto;
            }
        }
        @media (max-width: 991px) {
            .login-form
            {
                max-width: 100%;
                margin: auto;
            }
        }

        .footer
        {
            opacity: 0.7;
        }
        .sm-menu
        {
            vertical-align: middle;
        }
        @media (min-width: 992px) {
            .vertical {
                top: 40%;
                margin: auto;
                position: absolute;
            }
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
                        <div class="col-md-offset-10 col-md-1 sm-menu">
                            <a href="#">Kontakt</a>
                        </div>
                </div>
            </div>
        </header>
        <div class="container login">
            <div class="panel panel-default vcenter">
                <div class="panel-body">
                    <div>
                        <h3 class="hidden-sm hidden-xs">Sprawdzenie statusu zgłoszenia reklamacyjnego</h3>
                        <h4 class="visible-sm visible-xs">Zgłoszenia reklamacyjne</h4>
                        <hr>

                    </div>
                    <div class="row vertical">
                        <div class="col-md-6 hidden-sm hidden-xs">
                            Wprowadź login oraz hasło do panelu reklamacyjnego w pola znajdujące się po prawej.<br>
                            W przypadku braku dostępu, prosimy o <a href="#">kontakt</a>.
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <form class="login-form">
                                <div class="form-group">
                                    <input class="form-control" id="nip" type="text" placeholder="NIP">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="nip" type="password" placeholder="Hasło">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Zaloguj</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>