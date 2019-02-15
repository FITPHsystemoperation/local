@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Select Existing Keyboard</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')
				@include ('shared.status')

				<form method="post" action="{{ route('computers.keyboard.attach', $computer->id) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="keyboard" class="col-md-3 col-form-label text-md-right">Select Keyboard:</label>
							
						<div class="col-md-7">
							<select class="c-select form-control" id="keyboard" name="keyboard" required autofocus>
								@foreach ($keyboards as $keyboard)
									<option value="{{ $keyboard->id }}" {{ $keyboard->computer ? 'disabled' : '' }}>
										{{ $keyboard->keyboardName }}
									</option>
								@endforeach{{-- $keyboards as $keyboard --}}
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Attach Keyboard</button>

							<a class="btn btn-outline-secondary" role="button" href="{{ route('computers.show', $computer->id) }}">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}

		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Add New Keyboard</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="{{ route('computers.keyboard.store', $computer->id) }}">
					@csrf

					<div class="form-group row">
						<label for="keyboardName" class="col-md-3 col-form-label text-md-right">Keyboard Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" name="keyboardName" placeholder="Keyboard name" value="{{ old('keyboardName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Keyboard</button>

							<button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
