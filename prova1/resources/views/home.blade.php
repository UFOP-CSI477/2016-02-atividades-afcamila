@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="links">
                        <a href="{{ url('/registros/create') }}">Registrar Evento</a>
                        <a href="{{ url('/atletas') }}">Meus Eventos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
