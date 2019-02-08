@extends('shared.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-sm-8">
			<div class="card mt-3 border-secondary">
				<div class="card-header">
					<h3>New Computer Record</h3>
				</div>

				<div class="card-body">
					@include('shared.error')

					<form method="post" action="/computers/create">
						@csrf

						<fieldset class="form-group">
							<label for="compName">Computer Name</label>
							
							<input type="text" class="form-control" id="compName" name="compName" placeholder="Computer Name"
								value="{{ old('compName') }}" required autofocus>
						</fieldset>

						<fieldset class="form-group">
							<label for="os">Operating System</label>
							
							<input type="text" class="form-control" id="os" name="os" placeholder="Operating System"
								value="{{ old('os') }}">
						</fieldset>

						<fieldset class="form-group">
							<label for="status">Computer status</label>
							
							<input type="text" class="form-control" id="status" name="status" placeholder="Computer status"
								value="{{ old('status') }}">
						</fieldset>

						<fieldset class="form-group">
							<label for="information">Computer Information</label>
							
							<textarea class="form-control" id="information" name="information" rows="3">{{ old('information') }}</textarea>
						</fieldset>

						<hr>

						<button type="submit" class="btn btn-primary">Save</button>

						<a class="btn btn-outline-secondary" href="/computers" role="button">Back</a>
					</form>
				</div>{{-- card-body --}}
			</div>{{-- card --}}
		</div>{{-- col --}}
	</div>{{-- row --}}
@endsection
