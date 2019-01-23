@extends('shared.master')

@section('title', 'New Computer Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
	    			
				    <h3>New Computer Record</h3>
	    			
	    		</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/computers/create">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="compName">Comp Name</label>
		    				<input type="text" class="form-control" id="compName" name="compName" placeholder="Computer Name" value="{{ old('compName') }}" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="userName">UserName</label>
		    				<input type="text" class="form-control" id="userName" name="userName" placeholder="UserName" value="{{ old('userName') }}" required>
		    			</fieldset>
		    
		    			<fieldset class="form-group">
		    				<label for="userPass">User Password</label>
		    				<input type="text" class="form-control" id="userPass" name="userPass" placeholder="User Password" value="{{ old('userPass') }}"required>
		    			</fieldset>
		    			
		    			<fieldset class="form-group">
		    				<label for="adminPass">Admin Password</label>
		    				<input type="text" class="form-control" id="adminPass" name="adminPass" placeholder="Administrator Password" value="{{ old('adminPass') }}" required>
		    			</fieldset>
		    
		    			<fieldset class="form-group">
		    				<label for="specs">Computer Specs</label>
		    				<textarea class="form-control" id="specs" name="specs" rows="3">{{ old('specs') }}</textarea>
		    			</fieldset>
		    			
						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Save</button>

		    			<a class="btn btn-outline-secondary" href="/computers" role="button">Back</a>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection