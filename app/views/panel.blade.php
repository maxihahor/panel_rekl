@extends('panel-layout')

@section('title')
    Panel reklamacyjny
    @endsection

@section('custom_style')

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
    .carousel-caption
    {
        background: rgba(255,255,255,0);
        background: -moz-linear-gradient(top, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(30%, rgba(0,0,0,0.8)), color-stop(60%, rgba(0,0,0,0.8)), color-stop(100%, rgba(255,255,255,0)));
        background: -webkit-linear-gradient(top, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: -o-linear-gradient(top, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: -ms-linear-gradient(top, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: linear-gradient(to bottom, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=0 );

        width: 100%;
        position: relative;
        left: 0px;
        top: 0%;
    }

    h1
    {
        text-shadow: 2px 2px 10px #000000;
    }

    @endsection

@section('panel-content')


    <div class="hidden-sm hidden-xs col-lg-6 col-md-6 panel-short-left">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="3"></li>
                <li data-target="#slider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background: url('{{URL::asset('img/slider/1.jpg')}}'); background-size: cover;">
                    <div class="carousel-caption">
                        <h1>PRZYGOTOWANI DO KAŻDEGO SEZONU</h1>
                    </div>
                </div>
                <div class="item" style="background: url('{{URL::asset('img/slider/2.jpg')}}'); background-size: cover;">
                    <div class="carousel-caption">
                        <h1>OPONY DO POJAZDÓW OSOBOWYCH ORAZ UŻYTKOWYCH</h1>
                    </div>
                </div>
                <div class="item" style="background: url('{{URL::asset('img/slider/3.jpg')}}'); background-size: cover;">
                    <div class="carousel-caption">
                        <h1>Jakas informacja do wpisania</h1>
                    </div>
                </div>
                <div class="item" style="background: url('{{URL::asset('img/slider/4.jpg')}}'); background-size: cover;">
                    <div class="carousel-caption">
                        <h1>Jakas informacja do wpisania</h1>
                    </div>
                </div>
                <div class="item" style="background: url('{{URL::asset('img/slider/5.jpg')}}'); background-size: cover;">
                    <div class="carousel-caption">
                        <h1>JESTEŚMY CZEŚCIĄ MOTORYZACJI</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 panel-short-right">
            <div style="font-weight: bold;">
                <p>Tutaj wyświetlane będą informacje o Twoich reklamacjach.</p>
                <p>Z poziomu panelu możliwy jest podgląd ich statusów, pobranie dokumentów jak i sprawdzenie archiwalnych zgłoszeń.</p>
                <p>Skorzystaj z wyszukiwarki znajdującej się poniżej, aby znaleźć zgłoszenie po jego numerze, bądź wybierz menu Reklamacje, a następnie odpowiednią kategorię.</p>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div id="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Wyszukaj reklamację">
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

@endsection
