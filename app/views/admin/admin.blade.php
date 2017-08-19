@extends ('admin.layout')

@section('custom-style')

@endsection

@section('panel-title')
    PANEL ADMINISTRACYJNY {{Auth::user()->nip}}
@endsection

@section('panel-body')
    <h3>Zarządzaj użytownikami</h3>
    <ul>
        <li>
            <a href="{{url('/admin/add')}}">Dodaj nowego użytkownika</a>
        </li>
        <li>
            <a href="#">Wyszukaj użytkownika</a>
        </li>
    </ul>
@endsection

@section('panel-footer')

@endsection