@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<h3>Edit {{ ucwords($computer_software->software->softwareName) }} Details</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="/computer-software/{{ $computer_software->id }}/edit">
					@csrf

					@foreach ($computer_software->software->specList as $spec)
						<div class="form-group row">
							<label for="{{ $spec }}" class="col-md-3 col-form-label text-md-right">{{ ucfirst($spec) }}:</label>
								
							<div class="col-md-7">
								<input type="text" class="form-control" id="{{ $spec }}" name="{{ $spec }}"
									value="{{array_key_exists($spec, $computer_software->specs) ?
										$computer_software->specs[$spec] : '' }}"
										{{ $loop->first ? 'autofocus' : '' }} >
							</div>{{-- col --}}
						</div>{{-- row --}}
					@endforeach{{-- $computer_software->software->specList as $spec --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-outline-secondary" href="/computer/{{$computer_software->computer->id}}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection