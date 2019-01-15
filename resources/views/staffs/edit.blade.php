@extends('shared.master')

@section('title', 'Update Staff Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h2 class="card-title">Update Staff Record</h2>
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/edit">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="idNumber">ID No.:</label>
		    				<input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="FIT xxxx" value="{{ $staff->idNumber }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="firstName">First Name:</label>
		    				<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="{{ $staff->firstName }}" required>
		    			</fieldset>
		    
		    			<fieldset class="form-group">
		    				<label for="middleName">Middle name:</label>
		    				<input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle name" value="{{ $staff->middleName }}"required>
		    			</fieldset>
		    			
		    			<fieldset class="form-group">
		    				<label for="lastName">Last Name:</label>
		    				<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="{{ $staff->lastName }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="nickName">Nick Name:</label>
		    				<input type="text" class="form-control" id="nickName" name="nickName" placeholder="Nick Name" value="{{ $staff->nickName }}" required>
		    			</fieldset>
		    
		    			<div class="form-group row">

			    			<div class="radio col-sm-4">
			    				<label>
			    					<input type="radio" name="gender" value="m" {{ $staff->gender === 'm' ? 'checked' : '' }}>Male
			    				</label>
			    			</div>
			    			
			    			<div class="radio col-sm-4">
			    				<label>
			    					<input type="radio" name="gender" value="f" {{ $staff->gender === 'f' ? 'checked' : '' }}>Female
			    				</label>
			    			</div>
			    			
						</div>
		    		
		    			<button type="submit" class="btn btn-primary">Update</button>
		    			
		    			<button type="reset" class="btn btn-outline-secondary">Clear</button>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection