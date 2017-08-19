@extends('panel-layout')

@section('custom_style')

    .inprog-bg
    {

    <?php
            if($status == "w toku")
            {
                ?>
                background: url("{{URL::asset('img/prog-bg.jpg')}}");
    <?php
            }
            elseif($status == "zakonczona")
            {
                ?>
                background: url("{{URL::asset('img/compl-bg.jpg')}}");
    <?php
            }
    ?>
    background-size: cover;
    background-repeat: no-repeat;
    height: 67%;
    /*text-align: center;*/
    word-wrap: break-word;
    color: #fff;
    font-weight: 900;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .inprog-bg h1
    {
    font-weight: 900;
    }

    .inprog-panel-right
    {
    background-color: #fff;
    /*border-top: 3px solid #064c96;
    border-right: 0px solid #064c96;
    border-bottom: 3px solid #064c96;*/
    height: 67%;
    color: #fff;
    word-wrap: break-word;
    padding: 1%;
    overflow: auto;
    }

    .inprog-panel-right table
    {
    color: #000;
    }

    .inprog-panel-left
    {
        /*background-color: rgba(0,0,0,0.5);*/

        /*background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0));*/
        background: rgba(255,255,255,0);
        background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(30%, rgba(0,0,0,0.8)), color-stop(60%, rgba(0,0,0,0.8)), color-stop(100%, rgba(255,255,255,0)));
        background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: -o-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 30%, rgba(0,0,0,0.8) 60%, rgba(255,255,255,0) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=0 );
        color: #fff;
        word-wrap: break-word;
        text-align: center;
        padding: 1%;
        height:50%;
        width:100%;
    }

    .det-info-1
    {
        border-right: 2px solid #064c96;
        height: 100%;
    }


@endsection

@section('title')
    Reklamacja nr <?php echo $id; ?>
@endsection

@section('panel-content')

    <div class="inprog-bg col-md-3 vertical-center">
        <?php
            if($status == "w toku")
                {
                    ?>

                    <div class="inprog-panel-left">
                        <h1>
                            W TOKU
                        </h1>
                        <hr>
                        Zgłoszenie zostało przyjęte w oddziale Opoltrans i jest weryfikowane przez Dział&nbspReklamacji
                    </div>

        <?php
                }
                elseif($status == "zakonczona")
                {
                    ?>
                    <div class="inprog-panel-left">
                        <h1>
                        ZAKOŃCZONA
                        </h1>
                        <hr>Reklamacja została rozpatrzona
                    </div>
            <?php
                }
        ?>
    </div>

    <div class="inprog-panel-right col-md-9">
        <div class="det-info-1 col-md-6">
            <table class="table table-responsive table-striped">
                <tr>
                    <th>
                        Numer zgłoszenia
                    </th>
                    <th>
                        <?php echo $id; ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Status
                    </th>
                    <th>
                        <?php echo $status; ?>
                    </th>
                </tr>

            </table>
        </div>

        <div class="det-info-2 col-md-6">

        </div>
    </div>

    @endsection