@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
			@include ('staffs.partials.name')

			@if ($staff->isCompleted)
				@include ('staffs.partials.work')
				@include ('staffs.partials.contact')
				@include ('staffs.partials.emergency')
				@include ('staffs.partials.account')
				@include ('staffs.partials.personal')
			@endif{{-- ($staff->isCompleted) --}}
	    </div><!-- container -->
	</section><!-- section -->
@endsection
