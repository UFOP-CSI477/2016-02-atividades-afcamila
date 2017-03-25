@extends('layout.principal')

@section('conteudo')

<h1>Exibir Estado</h1>
  <form method="post" action="/estados/{{$estado->id}}">

  {{method_field('DELETE')}} <!-- http nao implementa -->
  {{csrf_field()}}

    Nome: {{$estado->nome}} <br>
    Sigla: {{$estado->sigla}} <br>

    <br>
    <br>
    <a href="/estados/{{$estado->id}}/edit" class="btn btn-primary"> Editar </a>

    <input type="submit" class="btn btn-danger" value="Excluir" />

    <a href="/estados" class="btn btn-primary"> Voltar </a>


  </form>

@endsection
