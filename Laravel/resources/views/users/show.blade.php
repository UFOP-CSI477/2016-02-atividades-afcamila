@extends('layouts.master')

@section('title')
    PetShop
@endsection

@section('content')

<h1>Dados Pessoais</h1>
<form method="post" action="/users/{{$user->id}}">

{{method_field('DELETE')}} <!-- http nao implementa -->
{{csrf_field()}}

  Nome: {{$user->name}} <br>
  Email: {{$user->email}} <br>
  Tipo: {{$user->tipo}} <br>

  <br>
  <a href="/users/{{$user->id}}/edit" class="btn btn-primary"> Editar </a>

  <a href="{{ url('/area') }}" class="btn btn-primary"> Voltar </a>

</form>
  @endsection
