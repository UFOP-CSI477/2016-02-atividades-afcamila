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

<h1>Criar Evento</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'eventos')) }}

    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('preco', 'Preço') }}
        {{ Form::float('preco', Input::old('preco'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {{ Form::date('data', Input::old('data'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Evento Criado!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
@endsection