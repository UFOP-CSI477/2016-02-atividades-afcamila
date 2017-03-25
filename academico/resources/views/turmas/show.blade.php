@extends('layout.principal')

@section('conteudo')

      <h1>Exibir Turma</h1>
        <form method="post" action="/turmas/{{$turma->id}}">

        {{method_field('DELETE')}} <!-- http nao implementa -->
        {{csrf_field()}}

          Nome: {{$turma->nome}} <br>
          Disciplina: {{$turma->disciplina->nome}} <br>


          <br>
          <br>
          <a href="/turmas/{{$turma->id}}/edit" class="btn btn-primary"> Editar </a>

          <input type="submit" class="btn btn-danger" value="Excluir" />

          <a href="/turmas" class="btn btn-primary"> Voltar </a>


        </form>
  @endsection
