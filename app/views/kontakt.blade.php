@extends('layout')

@section('title')
    Reklamacje - Kontakt
@endsection

@section('custom_style')
    .panel-right
    {
        padding: 0px;
    }
    @media(min-width: 992px)
    {
        .panel-left
        {
            background: url("{{URL::asset('img/panel-left-bg-contact.png')}}") bottom center no-repeat;
            background-size: cover;
        }
    }


@endsection

@section('content')
    <div class="panel_main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 panel-left">
                    <div class="col-md-6 col-sm-6">
                        <h2>Kontakt</h2>
                        <hr>
                        <div class="col-md-offset-1 col-sm-offset-1">
                            <p>Dział Reklamacji</p>
                            <p>
                                ul. Norweska 13<br>
                                45-920 Opole
                            </p>
                            <p>
                                <span class="glyphicon glyphicon-earphone"></span> 77 40 99 608
                                <br>
                                <span class="glyphicon glyphicon-earphone"></span> 77 40 99 619
                            </p>
                            <p>
                                <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:reklamacje@opoltrans.com.pl">reklamacje@opoltrans.com.pl</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 panel-right hidden-xs">
                    <div class="box">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection