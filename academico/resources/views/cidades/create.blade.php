@extends('layout.principal')

@section('conteudo')

      <h1>Inserir Cidades</h1>
        <form method="post" action="/cidades">

        {{csrf_field()}}

        <div class="form-group">
          <label for="nome"> Nome </label>
          <input type="text" class="form-control" name="nome"/>
        </div>

        <div class="form-group">
          <label for="estado_id"> Estado </label>
          <select name="estado_id">
            @foreach($estados as $e)
              <option value="{{$e->id}}"> {{$e->nome}}</option>
            @endforeach
          </select>

        </div>


        <input type="submit" class="btn btn-primary" value="Salvar" />

        <a href="/cidades" class="btn btn-primary"> Voltar </a>
        </form>

@endsection
