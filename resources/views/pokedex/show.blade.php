@extends('layouts.layout')

@section('content')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/pokedex_show.css') }}">

<div class="wrapper">
	<div class="row">
		<div class="col-xl-3 col-md-3 col-12">
			<div class="card pokemon-card">
				<p class="id-number">#{{ $pokemon->id }}</p>
				<img class="card-img-top" src="/img/{{ $pokemon->name }}.png" alt="{{ $pokemon->name }}">
				<div class="card-body">
				
				<h5 class="card-title">{{ $pokemon->name }}</h5>
				<p class="card-text">Type 1 - {{ $pokemon['type1'] }} </p>
				@if($pokemon['type2'] == '')
				<p></p>
				@else
					<p class="card-text">Type 2 - {{ $pokemon['type2'] }} </p>
				@endif
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-md-6 col-12">
			<p>HP - {{ $pokemon->HP }}</p>
			<p>Attack - {{ $pokemon->attack }}</p>
			<p>Defense - {{ $pokemon->defence }}</p>
			<p>Sp. Attack - {{ $pokemon->sp_attack }}</p>
			<p>Sp. Defense - {{ $pokemon->sp_defence }}</p>
			<p>Defense - {{ $pokemon->speed }}</p>
		</div>
		<div class="col-xl-3 col-md-3 col-0">
		
		</div>
	</div>
</div>

@endsection