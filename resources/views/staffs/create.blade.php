@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h2>New Staff Record</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="/staffs/create">
					@csrf

					<div class="form-group row">{{-- idnumber --}}
						<label for="idNumber" class="col-md-3 col-form-label text-md-right">ID No.:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="FIT xxxx" value="{{ old('idNumber') }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">{{-- firstName --}}
						<label for="firstName" class="col-md-3 col-form-label text-md-right">First Name:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="middleName" class="col-md-3 col-form-label text-md-right">Middle name:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle name" value="{{ old('middleName') }}">
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="lastName" class="col-md-3 col-form-label text-md-right">Last Name:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="nickName" class="col-md-3 col-form-label text-md-right">Nick Name:</label>
						
						<div class="col-md-7">
							<input type="text" class="form-control" id="nickName" name="nickName" placeholder="Nick Name" value="{{ old('nickName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<div class="col-md-2 offset-md-3">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="m" checked>Male
								</label>
							</div>{{-- form-check --}}
						</div>{{-- col --}}

						<div class="col-md-2">
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="gender" value="f">Female
								</label>
							</div>{{-- form-check --}}
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-outline-secondary" href="/staffs" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
