@extends('layout.principal')

@section('conteudo')
        <title>Acadêmico</title>

      <h1>Inserir Estados</h1>
        <form method="post" action="/estados">

        {{csrf_field()}}
          Nome: <input type="text" name="nome" /> <br>
          Sigla: <input type="text" name="sigla" /> <br>
          <input type="submit" value="Salvar" /> <br>

        </form>
@endsection
