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
        <a class="navbar-brand" href="{{ URL::to('s') }}">Evento Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('s') }}">Ver Todos Eventos</a></li>
        <li><a href="{{ URL::to('s/create') }}">Criar um Evento</a>
    </ul>
</nav>

<h1>Exibindo {{ $evento->nome }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $evento->nome }}</h2>
        <p>
            <strong>Preço:</strong> {{ $->preco }}<br>
            <strong>Data:</strong> {{ $->data }}
        </p>
    </div>

</div>
</body>
</html>
@endsection