@extends('shared.master')

@section('content')
	<div class="container">
		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Select Existing Charger</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="/computer/{{$id}}/charger/add">
					@csrf

					<div class="form-group row">
						<label for="charger_id" class="col-md-3 col-form-label text-md-right">Select Charger:</label>
							
						<div class="col-md-7">
							<select class="c-select form-control" id="charger_id" name="charger_id" required autofocus>
								@foreach ($chargers as $charger)
									<option value="{{ $charger->id }}" {{ $charger->computer_id ? 'disabled' : '' }}>
										{{ $charger->chargerName }}
									</option>
								@endforeach{{-- $chargers as $charger --}}
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Link Charger</button>

							<a class="btn btn-outline-secondary" href="/computer/{{$id}}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}

		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Add New Charger</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')
				@include ('shared.status')

				<form method="post" action="/chargers/create">
					@csrf

					<div class="form-group row">
						<label for="chargerName" class="col-md-3 col-form-label text-md-right">Charger Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" name="chargerName" placeholder="Charger name" value="{{ old('chargerName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Charger</button>

							<button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
