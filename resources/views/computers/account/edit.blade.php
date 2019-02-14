@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Edit Account</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('computers.account.update', [$account->computer_id, $account->id]) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="accountName" class="col-md-3 col-form-label text-md-right">Account Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="accountName" name="accountName" value="{{ $account->accountName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="type_id" class="col-md-3 col-form-label text-md-right">Account Role:</label>
							
						<div class="col-md-7">
							<select class="form-control" id="type_id" name="type_id" required>
								@foreach ($types as $type)
									<option value="{{ $type->id }}" {{ $account->type_id === $type->id ? 'selected' : '' }}>
										{{ $type->type }}
									</option>
								@endforeach{{-- $types as $type --}}			
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="password" class="col-md-3 col-form-label text-md-right">Password:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="password" name="password" value="{{ $account->password }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-danger" role="button" href="#"
								onclick="event.preventDefault(); document.getElementById('delete_form').submit();">
								Delete Record
							</a>

							<a class="btn btn-outline-secondary" href="{{ route('computers.show', $account->computer_id) }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>

				<form id="delete_form" method="post"
					action="{{ route('computers.account.destroy', [$account->computer_id, $account->id]) }}">
					@csrf

					@method ('delete')
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
