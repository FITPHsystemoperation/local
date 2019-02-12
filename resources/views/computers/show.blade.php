@extends('shared.master')

@section('content')
	<div class="container my-3">
		@include ('computers.partials.computer')

		@include ('computers.partials.account')

		@include ('computers.partials.software')

		<h1 class="display-4 m-3">Accessories</h1>

		<div class="row">
			<div class="col-md-6">
				@include ('computers.partials.mouse')
			</div>{{-- col --}}

			<div class="col-md-6">
				@include ('computers.partials.keyboard')
			</div>{{-- col --}}
		</div>{{-- row --}}

		<div class="row mt-3">
			<div class="col-md-6">
				@include ('computers.partials.monitor')
			</div>{{-- col --}}

			<div class="col-md-6">
				@include ('computers.partials.charger')
			</div>{{-- col --}}
		</div>{{-- row --}}
	</div>{{-- container --}}
@endsection
