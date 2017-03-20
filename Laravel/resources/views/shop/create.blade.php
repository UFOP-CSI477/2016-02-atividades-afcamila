@extends('layouts.master')

@section('title')
    PetShop
@endsection

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>PetShop</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('area') }}">Produtos</a>
    </div>
</nav>

<h1>Criar Produto</h1>

    <!--<form class="" action="/produtos" method="POST">
        <input type="text" name="nome" value="" placeholder="Nome">
        {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="Salvar">
    </form>-->

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/area') }}">
                        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
            <label for="nome" class="col-md-4 control-label">Nome</label>

            <div class="col-md-6">
                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" autofocus>
            </div>
        </div>

        <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
            <label for="preco" class="col-md-4 control-label">Preço</label>

            <div class="col-md-6">
                <input id="preco" type="decimal" class="form-control" name="preco" value="{{ old('preco') }}" autofocus>
            </div>
        </div>

        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
            <label for="imagem" class="col-md-4 control-label">Imagem</label>

            <div class="col-md-6">
                <input type="file" name="fileToUpload" id="imagem">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>

    </form>

</div>
</body>
</html>

@endsection