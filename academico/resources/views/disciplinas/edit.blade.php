@extends('layout.principal')

@section('conteudo')

      <h1>Editar Disciplina</h1>
        <form method="post" action="/disciplinas/{{$disciplina->id}}">

        {{method_field('PATCH')}} <!-- http nao implementa -->
        {{csrf_field()}}
          Nome: <input type="text" name="nome" value="{{$disciplina->nome}}" /> <br>
          Codigo: <input type="text" name="codigo" value="{{$disciplina->codigo}}"/> <br>
          CH: <input type="text" name="carga" value="{{$disciplina->carga}}"/> <br>

          <input type="submit" class="btn btn-primary" value="Salvar" /> <br>
        </form>
  @endsection
