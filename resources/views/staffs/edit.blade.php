@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Update Staff Record</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="/staff/{{ $staff->id }}/edit" enctype="multipart/form-data">
					@csrf

					<div class="form-group row">{{-- idnumber --}}
						<label for="idNumber" class="col-md-3 col-form-label text-md-right">ID No.:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="FIT xxxx" value="{{ $staff->user['idNumber'] }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">{{-- firstName --}}
						<label for="firstName" class="col-md-3 col-form-label text-md-right">First Name:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="{{ $staff->firstName }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="middleName" class="col-md-3 col-form-label text-md-right">Middle name:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle name" value="{{ $staff->middleName }}">
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="lastName" class="col-md-3 col-form-label text-md-right">Last Name:</label>

						<div class="col-md-7">
							<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="{{ $staff->lastName }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="nickName" class="col-md-3 col-form-label text-md-right">Nick Name:</label>
						
						<div class="col-md-7">
							<input type="text" class="form-control" id="nickName" name="nickName" placeholder="Nick Name" value="{{ $staff->nickName }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="image" class="col-md-3 col-form-label text-md-right">Image:</label>
						
						<div class="col-md-7">
							<input type="file" class="form-control-file" id="image" name="image">
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-outline-secondary" href="/staff/{{ $staff->id }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection