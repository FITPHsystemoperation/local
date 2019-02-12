@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h3>Add New Software to {{ $computer->compName }}</h3>
					</div>{{-- col --}}
						
					<div class="col text-right">
						@include ('computers.software.partials.list')
					</div>{{-- col --}}					
				</div>{{-- row --}}
			</div>{{-- card-header --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection