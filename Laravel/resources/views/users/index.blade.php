@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

<h1>Lista de Usuários</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Tipo</th>

    </tr>
  </thead>
<tbody>
@foreach ($users as $u)

<tr>

  <td><a href="/users/{{ $u->id }}">{{ $u->nome }}</a> </td>
  <td>{{ $u->email }}</td>
  <td>{{ $u->tipo }}</td>

</tr>
@endforeach
</tbody>
</table>


@endsection
