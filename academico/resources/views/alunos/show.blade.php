@extends('layout.principal')

@section('conteudo')

      <h1>Exibir Aluno</h1>
        <form method="post" action="/alunos/{{$aluno->id}}">

        {{method_field('DELETE')}} <!-- http nao implementa -->
        {{csrf_field()}}

          Nome: {{$aluno->nome}} <br>
          Cidade: {{$aluno->cidade->nome}} <br>
          Rua:  {{$aluno->rua}} <br>
          Numero: {{$aluno->numero}} <br>
          Bairro: {{$aluno->bairro}} <br>
          CEP : {{$aluno->cep}} <br>
          Email: {{$aluno->email}} <br>

          <br>
          <br>
          <a href="/alunos/{{$aluno->id}}/edit" class="btn btn-primary"> Editar </a>

          <input type="submit" class="btn btn-danger" value="Excluir" />

          <a href="/alunos" class="btn btn-primary"> Voltar </a>


        </form>
  @endsection
