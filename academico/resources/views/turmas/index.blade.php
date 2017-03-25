@extends('layout.principal')

@section('conteudo')

<h1>Lista de Turmas</h1>

<a href="/turmas/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Disciplina</th>

    </tr>
  </thead>
<tbody>
@foreach ($turmas as $t)

<tr>

  <td><a href="/turmas/{{ $t->id }}">{{ $t->nome }}</a> </td>

  <td>{{ $t->disciplina->id }}</td>


</tr>

@endforeach
</tbody>
</table>

@endsection
