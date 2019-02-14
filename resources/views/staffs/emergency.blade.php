@extends('shared.master')

@section('content')
	<div class="container my-3">
		<h1 class="display-4">{{ "$staff->firstName $staff->lastName" }}</h1>

		<div class="card border-dark mt-3">
			<div class="card-header">
				<h4>Update Emergency Contact Information</h4>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('staffs.emergency.update', $staff->id) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="emergencyPerson" class="col-md-3 col-form-label text-md-right">Contact Person:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="emergencyPerson" name="emergencyPerson" value="{{ $staff->emergencyPerson }}" placeholder="Contact Person" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="emergencyNo" class="col-md-3 col-form-label text-md-right">Contact No.:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="emergencyNo" name="emergencyNo" value="{{ $staff->emergencyNo }}" placeholder="Contact Number" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="emergencyRelation" class="col-md-3 col-form-label text-md-right">Relationship:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="emergencyRelation" name="emergencyRelation" value="{{ $staff->emergencyRelation }}" placeholder="Relationship" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary"> 
								{{ $staff->isCompleted ? 'Save Record' : 'Go Next' }}
							</button>

							<a class="btn btn-outline-secondary" role="button"
								href="{{ route($staff->isCompleted ? 'staffs.show' : 'staffs.contact.edit', $staff->id) }}">Go Back
							</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection