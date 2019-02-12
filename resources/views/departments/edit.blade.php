@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<h2>Update Department Record</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error') 

				<form method="post" action="/department/{{ $department->id }}/edit">
					@csrf

					<div class="form-group row">
						<label for="departmentName" class="col-md-3 col-form-label text-md-right">Department Name</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="departmentName" name="departmentName" placeholder="Department Name" value="{{ $department->departmentName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">update Record</button>

							<a class="btn btn-outline-secondary" href="/department/{{ $department->id }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
