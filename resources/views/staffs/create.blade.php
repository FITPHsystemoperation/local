@extends('shared.master')

@section('title', 'New Computer Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h2 class="card-title">New Staff Record</h2>
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staffs/create">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="idNumber">ID No.:</label>
		    				<input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="FIT xxxx" value="{{ old('idNumber') }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="firstName">First Name:</label>
		    				<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>
		    			</fieldset>
		    
		    			<fieldset class="form-group">
		    				<label for="middleName">Middle name:</label>
		    				<input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle name" value="{{ old('middleName') }}"required>
		    			</fieldset>
		    			
		    			<fieldset class="form-group">
		    				<label for="lastName">Last Name:</label>
		    				<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="nickName">Nick Name:</label>
		    				<input type="text" class="form-control" id="nickName" name="nickName" placeholder="Nick Name" value="{{ old('nickName') }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="birthday">Birth Date:</label>
		    				<input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}" required>
		    			</fieldset>
		    
		    			<div class="form-group row">

			    			<div class="radio col-sm-4">
			    				<label>
			    					<input type="radio" name="gender" value="m" checked>Male
			    				</label>
			    			</div>
			    			
			    			<div class="radio col-sm-4">
			    				<label>
			    					<input type="radio" name="gender" value="f">Female
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