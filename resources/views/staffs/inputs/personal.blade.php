@extends('shared.master')

@section('content')
	<div class="container my-3">
		<h1 class="display-4">{{ "$staff->firstName $staff->lastName" }}</h1>

		<div class="card border-dark mt-3">
			<div class="card-header">
				<h4>Update Personal Information</h4>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('staffs.personal.update', $staff->id) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="birthday" class="col-md-3 col-form-label text-md-right">Birth Date:</label>
							
						<div class="col-md-7">
							<input type="date" class="form-control" id="birthday" name="birthday" value="{{ $staff->birthday }}"  required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="civilStatus" class="col-md-3 col-form-label text-md-right">Civil Status:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="civilStatus" name="civilStatus" value="{{ $staff->civilStatus }}" placeholder="Civil status" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<div class="col-md-2 offset-md-3">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="m"
										{{ $staff->gender === 'm' ? 'checked' : '' }}>Male
								</label>
							</div>{{-- form-check --}}
						</div>{{-- col --}}

						<div class="col-md-2">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="f"
										{{ $staff->gender === 'f' ? 'checked' : '' }}>Female
								</label>
							</div>{{-- form-check --}}
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-outline-secondary" role="button"
								href="{{ route($staff->isCompleted ? 'staffs.show' : 'staffs.account.edit', $staff->id) }}">Go Back
							</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection