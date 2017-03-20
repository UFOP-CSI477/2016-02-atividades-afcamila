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

<h1>Exibir Produto</h1>
<form method="post" action="/shop/{{$produto->id}}">

{{method_field('DELETE')}} <!-- http nao implementa -->
{{csrf_field()}}

  Nome: {{$produto->nome}} <br>
  Preço: {{$produto->preco}} <br>
  <!--Imagem: {{$produto->imagem}} <br>-->
  <image img src="/images/{{$produto->imagem}}" alt="profile Pic" class="img-responsive" height="100" width="100" alt="Image"></image>

  <br>
  <br>
  <a href="/shop/{{$produto->id}}/edit" class="btn btn-primary"> Editar </a>

  <input type="submit" class="btn btn-danger" value="Excluir" />
  
</form>
  @endsection