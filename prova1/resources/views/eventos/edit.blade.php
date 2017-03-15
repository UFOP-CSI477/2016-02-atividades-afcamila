@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Eventos Esportivos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('eventos') }}">Evento Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('eventos') }}">Ver Todos Eventos</a></li>
        <li><a href="{{ URL::to('eventos/create') }}">Criar um Evento</a>
    </ul>
</nav>

<h1>Edit {{ $evento->nome }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($evento, array('route' => array('eventos.update', $evento->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('preço', 'Preço') }}
        {{ Form::float('preço', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {{ Form::text('data', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Editar o Evento!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

@endsection