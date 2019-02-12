@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<h3>Add Account to this Computer</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="/computer/{{ $id }}/account/create">
					@csrf

					<div class="form-group row">
						<label for="accountName" class="col-md-3 col-form-label text-md-right">Account Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="accountName" name="accountName" placeholder="Account Name" value="{{ old('accountName') }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="type_id" class="col-md-3 col-form-label text-md-right">Account Role:</label>
							
						<div class="col-md-7">
							<select class="form-control" id="type_id" name="type_id" required>
								<option value="" disabled selected>Select Role</option>
								
								@foreach ($types as $type)
									<option value="{{ $type->id }}">{{ $type->type }}</option>
								@endforeach{{-- $types as $type --}}
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="password" class="col-md-3 col-form-label text-md-right">Password:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-outline-secondary" href="/computer/{{ $id }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
