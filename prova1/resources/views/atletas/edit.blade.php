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
        <a class="navbar-brand" href="{{ URL::to('atletas') }}">Atleta Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('atletas') }}">Ver Todos Atletas</a></li>
        <li><a href="{{ URL::to('atletas/create') }}">Criar um Atleta</a>
    </ul>
</nav>

<h1>Edit {{ $atleta->nome }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($atleta, array('route' => array('atletas.update', $atleta->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('login', 'Login') }}
        {{ Form::text('login', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('senha', 'Senha') }}
        {{ Form::text('senha', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Editar o Atleta!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

@endsection