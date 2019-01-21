@extends('shared.master')

@section('title', 'Update Department Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h2>Update Department Record</h2>
		    		
		    	</div>

		    	<div class="card-body">
				    
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/department/{{ $department->id }}/edit">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="departmentName">Department Name</label>
		    				<input type="text" class="form-control" id="departmentName" name="departmentName" placeholder="Department Name" value="{{ $department->departmentName }}" required autofocus>
		    			</fieldset>

		    			<button type="submit" class="btn btn-primary">Save</button>
		    			
		    			<a class="btn btn-outline-secondary" href="/department/{{ $department->id }}" role="button">Back</a>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection