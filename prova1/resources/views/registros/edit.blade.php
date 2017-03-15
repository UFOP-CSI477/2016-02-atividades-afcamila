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
        <a class="navbar-brand" href="{{ URL::to('registros') }}">Registro Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('registros') }}">Ver Todos Registros</a></li>
        <li><a href="{{ URL::to('registros/create') }}">Criar um Registro</a>
    </ul>
</nav>

<h1>Edit {{ $registro->nome }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($registro, array('route' => array('registros.update', $registro->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('atleta_id', 'Atleta') }}
        {{ Form::text('atleta_id', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('evento_id', 'Evento') }}
        {{ Form::text('evento_id', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {{ Form::text('data', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pago', 'Pago') }}
        {{ Form::text('pago', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Editar o Registro!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>