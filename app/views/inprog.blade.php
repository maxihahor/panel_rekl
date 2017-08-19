@extends('panel-layout')

@section('custom_style')

    .inprog-bg
    {
        background: url("{{URL::asset('img/inprog-bg.jpg')}}");
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
        border-top: 3px solid #064c96;
        border-right: 0px solid #064c96;
        border-bottom: 3px solid #064c96;
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
        background-color: rgba(0,0,0,0.5);
        color: #fff;
        word-wrap: break-word;
        text-align: center;
    }

    a.icon-edit
    {
        color: #060;
    }

    a.icon-edit:hover
    {
        text-decoration: none;
        color: #0C0;
    }

    a.icon-delete
    {
        color: #c00;
    }

    a.icon-delete:hover
    {
        text-decoration: none;
        color: #f00;
    }
    @endsection

@section('title')
    Reklamacje w toku
    @endsection

@section('panel-content')

    <div class="inprog-bg col-md-3 vertical-center">
        <div class="inprog-panel-left">
            <h1>
                REKLAMACJE W&nbspTOKU
            </h1>
        </div>
    </div>
    <div class="inprog-panel-right col-md-9">

        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>
                        Nr zgłoszenia
                    </th>
                    <th>
                        Data
                    </th>
                    <th>
                        Nr FV
                    </th>
                    <th>

                    </th>
                    @if(Auth::user()->admin)
                        <th>

                        </th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @for ($i=0; $i<30; $i++)
                <tr>
                    <td class='filterable-cell'>000{{$i}}/RA/2017</td>
                    <td class='filterable-cell'>{{$i}}-01-2017</td>
                    <td class='filterable-cell'>S{{$i}}/123456789</td>
                    <td class='filterable-cell'><a href='/panel/det/$i'>Szczegóły</a></td>
                    @if(Auth::user()->admin)
                        <td class='filterable-cell'>
                            <a href="#" class="icon-edit">
                                <span class="glyphicon glyphicon-edit" style="margin-right: 10px"></span>
                            </a>
                            <a href="#" class="icon-delete">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    @endif
                </tr>
            @endfor

            </tbody>
        </table>
    </div>


    @endsection