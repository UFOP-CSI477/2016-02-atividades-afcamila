@extends('layout.principal')

@section('conteudo')

<h1>Lista de Alunos</h1>

<a href="/alunos/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Cidade</th>
    </tr>
  </thead>
<tbody>
@foreach ($alunos as $a)

<tr>

  <td><a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a> </td>

  <td>{{ $a->cidade->nome }}</td>


</tr>
@endforeach
</tbody>
</table>


@endsection
