@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h2>Edit Software</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('softwares.update', $software->id) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="softwareName" class="col-md-3 col-form-label text-md-right">Software Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="softwareName" name="softwareName" placeholder="Software Name" value="{{ $software->softwareName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="specList" class="col-md-3 col-form-label text-md-right">Spec List:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="specList" name="specList" value="{{ implode(' ', $software->specList) }}">

							<small class="form-text text-muted">
								<strong>Separate each specs using Spacebar</strong>
							</small>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-outline-secondary" href="{{ route('softwares.index') }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
