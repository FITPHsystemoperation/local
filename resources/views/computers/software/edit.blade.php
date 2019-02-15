@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Edit {{ ucwords($computer_software->software->softwareName) }} Details</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="{{ route('computers.software.update', [$computer_software->computer_id, $computer_software->id]) }}">
					@csrf

					@method ('patch')

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

							<a class="btn btn-danger" role="button" href="#"
								onclick="event.preventDefault(); document.getElementById('delete_form').submit();">
								Delete Record
							</a>

							<a class="btn btn-outline-secondary" role="button"
								href="{{ route('computers.show', $computer_software->computer_id) }}">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>

				<form id="delete_form" method="post"
					action="{{ route('computers.software.destroy', [$computer_software->computer_id, $computer_software->id]) }}">
					@csrf

					@method ('delete')
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection