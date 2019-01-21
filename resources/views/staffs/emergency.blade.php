@extends('shared.master')

@section('title', 'Emergency Contact Information')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">

		    <h1 class="m-3">{{ "$staff->firstName $staff->lastName" }}</h1>
			
		    <div class="card border-secondary">

		    	<div class="card-header">
		    		
				    <h4>Update Emergency Contact Information</h4>
		    		
		    	</div>

		    	<div class="card-body">
				    
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/emergency">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="emergencyPerson">Contact Person:</label>
		    				<input type="text" class="form-control" id="emergencyPerson" name="emergencyPerson" value="{{ $staff->emergencyPerson }}" placeholder="Contact Person" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="emergencyNo">Contact No.:</label>
		    				<input type="text" class="form-control" id="emergencyNo" name="emergencyNo" value="{{ $staff->emergencyNo }}" placeholder="Contact Number" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="emergencyRelation">Relationship:</label>
		    				<input type="text" class="form-control" id="emergencyRelation" name="emergencyRelation" value="{{ $staff->emergencyRelation }}" placeholder="Relationship" required>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary"> 
		    				{{ $staff->isCompleted ? 'Save' : 'Next' }}
		    			</button>

						<a class="btn btn-outline-secondary"
						href="/staff/{{ $staff->isCompleted ? $staff->id : "$staff->id/contact-information" }}"
						role="button">Back</a>

		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection