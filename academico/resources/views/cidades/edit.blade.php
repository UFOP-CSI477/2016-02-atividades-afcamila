@extends('layout.principal')

@section('conteudo')

      <h1>Editar Cidade</h1>
        <form method="post" action="/cidades/{{$cidade->id}}">

        {{method_field('PATCH')}}
        {{csrf_field()}}

          Nome: <input type="text" name="nome" value="{{$cidade->nome}}" /> <br>
          Estado: <input type="text" name="estado_id" value="{{$cidade->estado_id}}"  /> <br>


          <input type="submit" class="btn btn-primary" value="Salvar" /> <br>
        </form>
  @endsection
