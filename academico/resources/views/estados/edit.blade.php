@extends('layout.principal')

@section('conteudo')

        <title>Acadêmico</title>

      <h1>Editar Estados</h1>
        <form method="post" action="/estados/{{$estado->id}}">

        {{method_field('PATCH')}} <!-- http nao implementa -->
        {{csrf_field()}}
          Nome: <input type="text" name="nome" value="{{$estado->nome}}"  /> <br>
          Sigla: <input type="text" name="sigla" value="{{$estado->sigla}}"  /> <br>
          <input type="submit" value="Salvar" /> <br>

        </form>

  @endsection
