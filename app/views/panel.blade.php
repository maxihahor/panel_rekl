@extends("layout")

@section('title')
    Panel reklamacyjny
    @endsection

@section('custom_style')
    .navbar-default
    {
        background-color: #064c96;
    }

    .panel-short-right
    {
        background-color: #064c96;
        height: 67%;
        padding: 30px;
        color: white;
    }
    .panel-short-left
    {
        background-size: cover;
        height: 67%;
        padding: 0px;
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

    @endsection

@section('content')

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
                            Reklamacje <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" style="background-color: #054187; color: white; border: 1px solid white;">
                            <li><a href="#">W toku</a></li>
                            <li><a href="#">Zakończone</a></li>
                            <li><a href="#">Odrzucone</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Wszystkie reklamacje</a></li>
                    <li><a href="#">Wyloguj się</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hidden-sm hidden-xs col-lg-6 col-md-6 panel-short-left">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{URL::asset('img/slider/1.jpg')}}" alt="Opoltrans">
                </div>
                <div class="item">
                    <img src="{{URL::asset('img/slider/2.jpg')}}" alt="Opoltrans">
                </div>
                <div class="item">
                    <img src="{{URL::asset('img/slider/1.jpg')}}" alt="Opoltrans">
                </div>
                <div class="item">
                    <img src="{{URL::asset('img/slider/2.jpg')}}" alt="Opoltrans">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 panel-short-right">
            <p>Tutaj wyświetlane będą informacje o Twoich reklamacjach.</p>
            <p>Z poziomu panelu możliwy jest podgląd ich statusów, pobranie dokumentów jak i sprawdzenie archiwalnych zgłoszeń.</p>
            <p>Skorzystaj z wyszukiwarki znajdującej się poniżej, aby znaleźć zgłoszenie po jego numerze, bądź wybierz menu Reklamacje, a następnie odpowiednią kategorię.</p>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div id="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Wyszukaj reklamację" >
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 10000
            })
        });
    </script>
@endsection
