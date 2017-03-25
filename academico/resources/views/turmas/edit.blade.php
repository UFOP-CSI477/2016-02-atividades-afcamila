@extends('layout.principal')

@section('conteudo')

      <h1>Editar Turma</h1>
        <form method="post" action="/turmas/{{$turma->id}}">

        {{method_field('PATCH')}} <!-- http nao implementa -->
        {{csrf_field()}}
        <div class="form-group">
          <label for="nome"> Nome </label>
          <input type="text" class="form-control" name="nome" value="{{$turma->nome}}"/>
        </div>

        <div class="form-group">
          <label for="disciplina_id"> Disciplina </label>
          <input type="text" class="form-control" name="disciplina_id" value="{{$turma->disciplina_id}}"/>
        </div>

          <input type="submit" class="btn btn-primary" value="Salvar" /> <br>
        </form>
  @endsection
