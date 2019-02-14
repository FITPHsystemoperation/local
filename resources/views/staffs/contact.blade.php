@extends('shared.master')

@section('content')
	<div class="container my-3">
		<h1 class="display-4">{{ "$staff->firstName $staff->lastName" }}</h1>

		<div class="card border-dark mt-3">
			<div class="card-header">
				<h4>Update Contact Information</h4>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('staffs.contact.update', $staff->id) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="contactNo" class="col-md-3 col-form-label text-md-right">Contact No.:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="contactNo" name="contactNo" value="{{ $staff->contactNo }}" placeholder="Contact Number" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="emailAddress" class="col-md-3 col-form-label text-md-right">Email Address:</label>
							
						<div class="col-md-7">
							<input type="email" class="form-control" id="emailAddress" name="emailAddress" value="{{ $staff->emailAddress }}" placeholder="Email Address" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="permanentAddress" class="col-md-3 col-form-label text-md-right">Permanent Address:</label>
							
						<div class="col-md-7">
						<input type="text" class="form-control" id="permanentAddress" name="permanentAddress" value="{{ $staff->permanentAddress }}" placeholder="Address" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="presentAddress" class="col-md-3 col-form-label text-md-right">Present Address:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="presentAddress" name="presentAddress" value="{{ $staff->presentAddress }}" placeholder="Address" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary"> 
								{{ $staff->isCompleted ? 'Save Record' : 'Go Next' }}
							</button>

							<a class="btn btn-outline-secondary" role="button"
								href="{{ route($staff->isCompleted ? 'staffs.show' : 'staffs.work.edit', $staff->id) }}">
								Go Back
							</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
