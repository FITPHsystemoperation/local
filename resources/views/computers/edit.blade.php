@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Update Computer Record</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include('shared.error')

				<form method="post" action="/computer/{{ $computer->id }}">
					@csrf

					<div class="form-group row">{{-- compName --}}
						<label for="compName" class="col-md-3 col-form-label text-md-right">Computer Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="compName" name="compName" value="{{ $computer->compName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">{{-- os --}}
						<label for="os" class="col-md-3 col-form-label text-md-right">Operating System:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="os" name="os" value="{{ $computer->os }}">
						</div>{{-- col --}}
					</div>{{-- row --}}
					
					<div class="form-group row">{{-- status --}}
						<label for="status" class="col-md-3 col-form-label text-md-right">Computer status:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="status" name="status" value="{{ $computer->status }}">
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">{{-- information --}}
						<label for="information" class="col-md-3 col-form-label text-md-right">Computer Information:</label>
							
						<div class="col-md-7">
							<textarea class="form-control" id="information" name="information" rows="3">{{ $computer->information }}</textarea>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-outline-secondary" href="/computer/{{ $computer->id }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}	
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection