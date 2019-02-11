@extends('shared.master')

@section('content')
	<div class="container my-3">
		@include ('staffs.partials.name')

		@if ($staff->isCompleted)
			@include ('staffs.partials.work')

			@include ('staffs.partials.contact')
			
			@include ('staffs.partials.emergency')

			@include ('staffs.partials.account')
			
			@include ('staffs.partials.personal')
		@endif{{-- ($staff->isCompleted) --}}
	</div>{{-- container --}}
@endsection
