@extends('shared.master')

@section('title', 'New Department Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h2 class="card-title">New Department Record</h2>
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/departments/create">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="departmentName">Department Name</label>
		    				<input type="text" class="form-control" id="departmentName" name="departmentName" placeholder="Department Name" value="{{ old('departmentName') }}" required>
		    			</fieldset>

		    			<button type="submit" class="btn btn-primary">Save</button>

		    			<a class="btn btn-outline-secondary" href="/departments" role="button">Back</a>
		    			
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection