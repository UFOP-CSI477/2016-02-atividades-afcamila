@extends('layout.principal')

@section('conteudo')

      <h1>Editar Aluno</h1>
        <form method="post" action="/alunos/{{$aluno->id}}">

        {{method_field('PATCH')}} <!-- http nao implementa -->
        {{csrf_field()}}
        <div class="form-group">
          <label for="nome"> Nome </label>
          <input type="text" class="form-control" name="nome" value="{{$aluno->nome}}"/>
        </div>


        <div class="form-group">
          <label for="cidade_id"> Cidade </label>
          <input type="text" class="form-control" name="cidade_id" value="{{$aluno->cidade_id}}"/>
        </div>



          <div class="form-group">
            <label for="rua"> Rua </label>
            <input type="text" class="form-control" name="rua"  value="{{$aluno->rua}}"/>
          </div>
          <div class="form-group">

            <div class="form-group">
              <label for="numero"> Numero </label>
              <input type="text" class="form-control" name="numero "  value="{{$aluno->numero}}"/>
            </div>
            <div class="form-group">

              <div class="form-group">
                <label for="bairro"> Bairro </label>
                <input type="text" class="form-control" name="bairro"  value="{{$aluno->bairro}}"/>
              </div>
              <div class="form-group">



          <div class="form-group">
            <label for="cep"> Cep </label>
            <input type="text" class="form-control" name="cep"  value="{{$aluno->cep}}"/>
          </div>
          <div class="form-group">

            <div class="form-group">
              <label for="mail"> Email </label>
              <input type="text" class="form-control" name="mail"  value="{{$aluno->email}}"/>
            </div>

            <input type="submit" class="btn btn-primary" value="Salvar" /> <br>
</form>
  @endsection
