@extends('layout')

@section('title')
    Opoltrans - panel reklamacyjny
@endsection

@section('custom_style')

@endsection

@section('content')
    <div class="panel_main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 panel-left hidden-xs">
                    <h2>Sprawdzenie statusu zgłoszenia reklamacyjnego</h2>
                    <hr>
                    Wprowadź login oraz hasło do panelu reklamacyjnego w pola znajdujące się po lewej.<br>
                    W przypadku problemów z logowaniem bądź pytań prosimy o <a href="{{url('/kontakt')}}">kontakt</a>.
                </div>
                <div class="col-md-6 col-sm-6 panel-right">
                    <div class="login_form">
                        <h3><b>Logowanie</b></h3>
                        <hr>
                        <form class="login-form sm-menu">
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
@endsection
