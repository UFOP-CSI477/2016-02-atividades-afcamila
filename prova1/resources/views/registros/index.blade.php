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
        <a class="navbar-brand" href="{{ URL::to('registros') }}">Registro Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('registros') }}">Ver Todos os Registros</a></li>
        <li><a href="{{ URL::to('registros.create') }}">Criar um Registro</a>
    </ul>
</nav>

<h1>Todos os Registros</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Atleta</td>
            <td>Evento</td>
            <td>Data</td>
            <td>Pago</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
    @foreach($registros as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->atleta_id }}</td>
            <td>{{ $value->evento_id }}</td>
            <td>{{ $value->data }}</td>
            <td>{{ $value->pago }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('registros/' . $value->id) }}">Ver Registro</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('registros/' . $value->id . '/edit') }}">Editar Registro</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
