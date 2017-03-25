@extends('layout.principal')

@section('conteudo')

      <h1>Exibir Disciplina</h1>
        <form method="post" action="/disciplinas/{{$disciplina->id}}">

        {{method_field('DELETE')}} <!-- http nao implementa -->
        {{csrf_field()}}

          Nome: {{$disciplina->nome}} <br>
          Codigo: {{$disciplina->codigo}} <br>
          CH: {{$disciplina->carga}} <br>

          <br>
          <br>
          <a href="/disciplinas/{{$disciplina->id}}/edit" class="btn btn-primary"> Editar </a>

          <input type="submit" class="btn btn-danger" value="Excluir" />

          <a href="/disciplinas" class="btn btn-primary"> Voltar </a>


        </form>
  @endsection
