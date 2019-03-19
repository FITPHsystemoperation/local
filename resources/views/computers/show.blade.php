@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
			@include ('computers.partials.computer')

			@include ('computers.partials.account')

			@include ('computers.partials.software')

			@include ('computers.partials.accessories')
			
	    </div><!-- container -->
	</section><!-- section -->
@endsection
