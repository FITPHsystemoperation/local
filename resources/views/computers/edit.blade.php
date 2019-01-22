@extends('shared.master')

@section('title', 'Update Computer Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h3>Update Computer Record</h3>
		    		
		    	</div>

		    	<div class="card-body">
				    
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/computer/{{ $computer->id }}">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="compName">Comp Name</label>
		    				<input type="text" class="form-control" id="compName" name="compName" value="{{ $computer->compName }}" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="userName">UserName</label>
		    				<input type="text" class="form-control" id="userName" name="userName" value="{{ $computer->userName }}" required>
		    			</fieldset>
		    
		    			<fieldset class="form-group">
		    				<label for="userPass">User Password</label>
		    				<input type="text" class="form-control" id="userPass" name="userPass" value="{{ $computer->userPass }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="adminPass">Admin Password</label>
		    				<input type="text" class="form-control" id="adminPass" name="adminPass"  value="{{ $computer->adminPass }}" required>
		    			</fieldset>
		    
		    			<fieldset class="form-group">
		    				<label for="specs">Computer Specs</label>
		    				<textarea class="form-control" id="specs" name="specs" rows="3">{{ $computer->specs }}</textarea>
		    			</fieldset>


		    			<div class="form-group row">
			    			<div class="checkbox col-sm-4">
			    				<label>
			    					<input type="checkbox" name="withWbuster"
			    					{{ $computer->withWbuster ? 'checked' : '' }}
			    					> With WillsBuster
			    				</label>
			    			</div>
			    		
			    			<div class="checkbox col-sm-4">
			    				<label>
			    					<input type="checkbox" name="withSkysea"
			    					{{ $computer->withSkysea ? 'checked' : '' }}
			    					> With SkySea
			    				</label>
			    			</div>
						</div>
		    		
						<hr>

		    			<button type="submit" class="btn btn-primary">Update</button>
		    			
		    			<a class="btn btn-outline-secondary" href="/computer/{{ $computer->id }}" role="button">Back</a>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection