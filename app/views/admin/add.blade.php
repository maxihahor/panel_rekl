@extends ('admin.layout')

@section('custom-style')

@endsection

@section('panel-title')
    PANEL ADMINISTRACYJNY {{Auth::user()->nip}} - useradd
@endsection

@section('panel-body')
    <div class="well">
        <legend>Nowy użytkownik</legend>
        <fieldset>
            {{Form::open(['style' => 'width:60%;', 'class' => 'form-horizontal'])}}
                <div class="form-group">
                    {{Form::label('company', 'Nazwa firmy', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-8">
                        {{Form::text('company', null, ['class' => 'form-control', 'required' => 'true'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('cnip', 'NIP', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-8">
                        {{Form::text('cnip', null, ['class' => 'form-control nip', 'minlength' => 10, 'maxlength' => 10, 'required' => 'true'])}}
                    </div>
                    <div class="col-md-1" style="vertical-align: middle">
                        <a href="#" data-toggle="nip-tooltip" title="Myślniki zostaną dodane automatycznie"><span class="glyphicon glyphicon-question-sign"></span></a>
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('plk', 'Numer PLK/PLZ', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-4">
                        {{Form::text('plk', null, ['class' => 'form-control', 'maxlength' => 9, 'required' => 'true'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('password', 'Hasło', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-3">
                        {{Form::password('password', ['class' => 'form-control', 'minlength' => 8, 'required' => 'true'])}}
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-default disabled" id="show-hide"><span id="glyph" class="glyphicon glyphicon-eye-open"></span></button>
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('password2', 'Powtórz hasło', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-3">
                        {{Form::password('password2', ['class' => 'form-control', 'minlength' => 8, 'required' => 'true'])}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3 label-control">

                    </div>
                    <div class="col-md-2" style="margin-right: 5px">
                        <button type="button" class="btn btn-success" id="generate">Generuj hasło</button>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <legend>Adres</legend>
                <div class="form-group">
                    {{Form::label('street', 'Ulica', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-8">
                        {{Form::text('street', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('build', 'Nr budynku', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-3">
                        {{Form::text('build', null, ['class' => 'form-control'])}}
                    </div>
                    {{Form::label('local', 'Nr lokalu', ['class' => 'label-control col-md-2'])}}
                    <div class="col-md-3">
                        {{Form::text('local', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('post', 'Kod pocztowy', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-3">
                        {{Form::text('post', null, ['class' => 'form-control cep', 'placeholder' => '12-345', 'data-mask' => '99-999', 'maxlength' => 5])}}
                    </div>
                    {{Form::label('city', 'Miasto', ['class' => 'label-control col-md-1'])}}
                    <div class="col-md-4">
                        {{Form::text('city', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">

                </div>
                <legend>Dane kontaktowe</legend>
                <div class="form-group">
                    {{Form::label('mail', 'E-mail', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-8">
                        {{Form::email('mail', null, ['class' => 'form-control', 'placeholder' => 'adres@email.com'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('tel', 'Telefon', ['class' => 'label-control col-md-3'])}}
                    <div class="col-md-8">
                        {{Form::text('tel', null, ['class' => 'form-control', 'placeholder' => '+48111222333'])}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3 label-control">

                    </div>
                    <div class="label-control col-md-1">
                        {{Form::checkbox('sms', 'Zgoda na otrzymywanie wiadomości SMS')}}
                    </div>
                    <div class="label-control col-md-6">
                        Zgoda na otrzymywanie wiadomości SMS
                    </div>
                </div>
                {{Form::submit("Dodaj użytkownika", ['class' => 'btn btn-primary'])}}
            {{Form::close()}}
        </fieldset>
    </div>
@endsection

@section('panel-footer')

@endsection

@section('script')
    <script>
        var pwShown = 0;

        $(document).ready(function(){
            $('[data-toggle="nip-tooltip"]').tooltip();
        });

        $(document).ready(function(){
            $('.cep').mask('99-999');
            $('.nip').mask('999-999-99-99');
        });

        $('#generate').click(function()
        {
            var password = Math.random().toString(36).slice(-8);
            document.getElementById("password2").value = document.getElementById("password").value = password;
            document.getElementById('show-hide').setAttribute('class', 'btn btn-default');
            pwShown = 0;

            document.getElementById('show-hide').addEventListener("click", function()
            {
                if(pwShown)
                {
                    pwShown=0;
                    document.getElementById('password').setAttribute('type', 'password');
                    document.getElementById('glyph').setAttribute('class', 'glyphicon glyphicon-eye-open');
                }
                else
                {
                    pwShown=1;
                    document.getElementById('password').setAttribute('type', 'text');
                    document.getElementById('glyph').setAttribute('class', 'glyphicon glyphicon-eye-close');
                }
            }, false);
        });


    </script>
@endsection