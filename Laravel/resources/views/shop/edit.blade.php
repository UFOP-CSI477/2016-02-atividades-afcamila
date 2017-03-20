@extends('layouts.master')

@section('title')
    PetShop
@endsection

@section('content')

<nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('area') }}">Produtos</a>
        </div>
    </nav>

<h1>Editar</h1>

<form class="form-horizontal" action="/shop/{{$produto->id}}" method="post">
    {{ method_field('PATCH') }} {{ csrf_field() }}
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        <label for="nome" class="col-md-4 control-label">Nome</label>

        <div class="col-md-6">
            <input id="nome" type="text" class="form-control" name="nome" value="{{ $produto->nome }}" autofocus placeholder="Nome" >
        </div>
    </div>

    <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
        <label for="preco" class="col-md-4 control-label">Preço</label>

        <div class="col-md-6">
            <input id="preco" type="decimal" class="form-control" name="preco" value="{{ $produto->preco }}" autofocus placeholder="preço" >
        </div>
    </div>

    <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
        <label for="imagem" class="col-md-4 control-label">Imagem</label>

        <div class="col-md-6">
            <input type="file" name="fileToUpload" value="{{ $produto->imagem }}"  autofocus placeholder="imagem" id="imagem">
        </div>
    </div>

    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary" value="Salvar">
                Salvar
            </button>
        </div>
    </div>
    
</form>

</div>
</body>
</html>

@endsection