@extends('shared.master')

@section('title', 'New Computer Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h2 class="card-title">New Computer Record</h2>
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/computers/create">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="compName">Comp Name</label>
		    				<input type="text" class="form-control" id="compName" name="compName" placeholder="Computer Name" value="{{ old('compName') }}" required>
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


		    			<div class="form-group row">
			    			<div class="checkbox col-sm-4">
			    				<label>
			    					<input type="checkbox" name="withWbuster"> With WillsBuster
			    				</label>
			    			</div>
			    		
			    			<div class="checkbox col-sm-4">
			    				<label>
			    					<input type="checkbox" name="withSkysea"> With SkySea
			    				</label>
			    			</div>
						</div>
		    		
		    			<button type="submit" class="btn btn-primary">Save</button>
		    			
		    			<button type="reset" class="btn btn-outline-secondary">Clear</button>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection