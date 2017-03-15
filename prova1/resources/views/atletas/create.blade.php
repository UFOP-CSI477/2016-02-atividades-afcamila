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

<h1>Criar Atleta</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'atletas')) }}

    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('login', 'Login') }}
        {{ Form::text('login', Input::old('login'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('senha', 'Senha') }}
        {{ Form::password('senha', Input::old('senha'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Atleta Criado!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

@endsection