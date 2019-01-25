@extends('shared.master')

@section('title', 'Add Account')

@section('content')

<div class="row justify-content-center">

	<div class="col-sm-8">
		
		<div class="card mt-3 border-secondary">
			
			<div class="card-header">

			    <h3>Add Account to this Computer</h3>

			</div>{{-- card-header --}}

			<div class="card-body">

				@foreach ($errors->all() as $error)
				    <p class="alert alert-danger">{{ $error }}</p>
				@endforeach

				<form method="post" action="/computer/{{ $id }}/account/create">

					@csrf

					<fieldset class="form-group">
	    				<label for="accountName">Account Name</label>
	    				<input type="text" class="form-control" id="accountName" name="accountName" placeholder="Account Name" value="{{ old('accountName') }}" required autofocus>
	    			</fieldset>

	    			<fieldset class="form-group">
	    				<label for="accountRole">Account Role</label>
	    				<input type="text" class="form-control" id="accountRole" name="accountRole" placeholder="Account Role" value="{{ old('accountRole') }}" required>
	    			</fieldset>

	    			<fieldset class="form-group">
	    				<label for="password">Password</label>
	    				<input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
	    			</fieldset>
					
	    			<hr>

	    			<button type="submit" class="btn btn-primary">Save</button>

	    			<a class="btn btn-outline-secondary" href="/computer/{{ $id }}" role="button">Back</a>
	
				</form>
				
			</div>{{-- card-body --}}

		</div>{{-- card --}}

	</div>{{-- col-sm-8 --}}
	
</div>{{-- row --}}

@endsection
