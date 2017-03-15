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
        <li><a href="{{ URL::to('atletas') }}">Ver Todos os Atletas</a></li>
        <li><a href="{{ URL::to('atletas/create') }}">Criar um Atleta</a>
    </ul>
</nav>

<h1>Todos os Atletas</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Login</td>
            <td>Senha</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
    @foreach($atletas as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nome }}</td>
            <td>{{ $value->senha }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('atletas/' . $value->id) }}">Ver Atleta</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('atletas/' . $value->id . '/edit') }}">Editar Atleta</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>

@endsection