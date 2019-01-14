@extends('shared.master')

@section('title', 'Update Department Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h2 class="card-title">Update Department Record</h2>
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/department/{{ $department->id }}/edit">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="departmentName">Department Name</label>
		    				<input type="text" class="form-control" id="departmentName" name="departmentName" placeholder="Department Name" value="{{ $department->departmentName }}" required>
		    			</fieldset>

		    			<button type="submit" class="btn btn-primary">Save</button>
		    			
		    			<button type="reset" class="btn btn-outline-secondary">Clear</button>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection