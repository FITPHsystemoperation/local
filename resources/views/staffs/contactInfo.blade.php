@extends('shared.master')

@section('title', 'Contact Information')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">

		    <h1 class="card-title m-3">{{ "$staff->firstName $staff->lastName" }}</h1>
			
		    <div class="card">

		    	<div class="card-body">
				    
				    <h4>Update Contact Information</h4>

				    <hr>

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/contact-information">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="contactNo">Contact No.:</label>
		    				<input type="text" class="form-control" id="contactNo" name="contactNo" value="{{ $staff->contactNo }}" placeholder="Contact Number" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="emailAddress">Email Address:</label>
		    				<input type="email" class="form-control" id="emailAddress" name="emailAddress" value="{{ $staff->emailAddress }}" placeholder="Email Address" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="permanentAddress">Permanent Address:</label>
		    				<input type="text" class="form-control" id="permanentAddress" name="permanentAddress" value="{{ $staff->permanentAddress }}" placeholder="Address" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="presentAddress">Present Address:</label>
		    				<input type="text" class="form-control" id="presentAddress" name="presentAddress" value="{{ $staff->presentAddress }}" placeholder="Address" required>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary"> 
		    				{{ $staff->isCompleted ? 'Save' : 'Next' }}
		    			</button>

						<a class="btn btn-outline-secondary"
						href="/staff/{{ $staff->isCompleted ? $staff->id : "$staff->id/working-data" }}"
						role="button">Back</a>

		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection