@extends('layout.principal')

@section('conteudo')

<h1>Lista de Cidades</h1>

<a href="/cidades/create" class="btn btn-primary">Inserir</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Estado</th>

    </tr>
  </thead>
<tbody>
@foreach ($cidades as $c)

<tr>

  <td><a href="/cidades/{{ $c->id }}">{{ $c->nome }}</a> </td>

  <td>{{ $c->estado->nome }}</td>


</tr>
@endforeach
</tbody>
</table>


@endsection
