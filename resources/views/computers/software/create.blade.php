@extends('computers.software.index')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col-8">
						<h3>Add {{ ucwords($software->softwareName) }} to {{ $computer->compName }}</h3>
					</div>{{-- col --}}
						
					<div class="col text-right">
						@include ('computers.software.partials.list')
					</div>{{-- col --}}					
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="{{ route('computers.software.store', [$computer->id, $software->id]) }}">
					@csrf

					@foreach ($software->specList as $spec)
						<div class="form-group row">
							<label for="{{ $spec }}" class="col-md-3 col-form-label text-md-right">{{ ucfirst($spec) }}:</label>
								
							<div class="col-md-7">
								<input type="text" class="form-control" id="{{ $spec }}" name="{{ $spec }}" placeholder="{{ $spec }}" value="{{ old( $spec) }}" {{ $loop->first ? 'autofocus' : '' }} >
							</div>{{-- col --}}
						</div>{{-- row --}}
					@endforeach{{-- $software->specList as $spec --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-outline-secondary" role="button" href="{{ route('computers.show', $computer->id) }}">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection