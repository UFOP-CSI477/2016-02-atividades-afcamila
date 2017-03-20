@extends('layouts.master')

@section('title')
    PetShop
@endsection

@section('content')

	@if(Session::has('cart'))

		<div class="row">
			<div class="col-sm6 col-md6">
				<ul class="list-group">

					@foreach($produtos as $produto)
						<li class="list-group-item">
							<span class="badge">{{ $produto['qtd'] }}</span>
							<strong>{{ $produto['item']['nome'] }}</strong>
							<span class="label label-success">{{ $produto['preco'] }}</span>
							<!--<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
									Action<span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#">-</a></li>
										<li><a href="#">+</a></li>
									</ul>
							</div>-->
						</li>
						@endforeach

				</ul>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<strong>Total: {{ $totalPreco }}</strong>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-6 col-md-6">
				<a href="{{ route('produto.postCart') }}" class="btn btn-success pull-right" role="button">Finalizar Compra</a>			
			</div>
		</div>

		@else
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<h2>Carrinho Vazio</h2>
			</div>
		</div>

		@endif

@endsection