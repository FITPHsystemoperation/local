@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<h3>Select Existing Monitor</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="/computer/{{$id}}/monitor/add">
					@csrf

					<div class="form-group row">
						<label for="monitor_id" class="col-md-3 col-form-label text-md-right">Select Monitor:</label>
							
						<div class="col-md-7">
							<select class="c-select form-control" id="monitor_id" name="monitor_id" required autofocus>
								@foreach ($monitors as $monitor)
									<option value="{{ $monitor->id }}" {{ $monitor->computer_id ? 'disabled' : '' }}>
										{{ $monitor->monitorName }}
									</option>
								@endforeach{{-- $monitors as $monitor --}}
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Link Monitor</button>

							<a class="btn btn-outline-secondary" href="/computer/{{$id}}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}

		<div class="card mt-3 border-secondary">
			<div class="card-header">
				<h3>Add New Monitor</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')
				@include ('shared.status')

				<form method="post" action="/monitors/create">
					@csrf

					<div class="form-group row">
						<label for="monitorName" class="col-md-3 col-form-label text-md-right">Monitor Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" name="monitorName" placeholder="Monitor name" value="{{ old('monitorName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Monitor</button>

							<button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection