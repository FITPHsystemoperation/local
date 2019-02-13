@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Select Existing Mouse</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="/computer/{{$id}}/mouse/add">
					@csrf

					<div class="form-group row">
						<label for="mouse_id" class="col-md-3 col-form-label text-md-right">Select Mouse:</label>

						<div class="col-md-7">
							<select class="c-select form-control" id="mouse_id" name="mouse_id" required autofocus>
								@foreach ($mouses as $mouse)
									<option value="{{ $mouse->id }}" {{ $mouse->computer_id ? 'disabled' : '' }}>
										{{ $mouse->mouseName }}
									</option>
								@endforeach{{-- $mouses as $mouse --}}
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Link Mouse</button>

							<a class="btn btn-outline-secondary" href="/computer/{{$id}}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}

		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Add New Mouse</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')
				@include ('shared.status')

				<form method="post" action="/mouses/create">
					@csrf

					<div class="form-group row">
						<label for="mouseName" class="col-md-3 col-form-label text-md-right">Mouse Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" name="mouseName" placeholder="Mouse name" value="{{ old('mouseName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Mouse</button>

							<button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
