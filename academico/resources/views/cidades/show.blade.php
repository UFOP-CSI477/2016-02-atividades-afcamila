@extends('layout.principal')

@section('conteudo')

      <h1>Exibir Cidade</h1>
        <form method="post" action="/cidades/{{$cidade->id}}">

        {{method_field('DELETE')}} <!-- http nao implementa -->
        {{csrf_field()}}

          Nome: {{$cidade->nome}} <br>
          Estado: {{$cidade->estado_id}} <br>


          <br>
          <br>
          <a href="/cidades/{{$cidade->id}}/edit" class="btn btn-primary"> Editar </a>

          <input type="submit" class="btn btn-danger" value="Excluir" />

          <a href="/cidades" class="btn btn-primary"> Voltar </a>


        </form>
  @endsection
