@extends('shared.master')

@section('title', 'Personal Information')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">

		    <h1 class="m-3">{{ "$staff->firstName $staff->lastName" }}</h1>
			
		    <div class="card border-secondary">

		    	<div class="card-header">
		    		
				    <h4>Update Personal Information</h4>
		    		
		    	</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/personal">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="birthday">Birth Date:</label>
		    				<input type="date" class="form-control" id="birthday" name="birthday" value="{{ $staff->birthday }}"  required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="civilStatus">Civil Status:</label>
		    				<input type="text" class="form-control" id="civilStatus" name="civilStatus" value="{{ $staff->civilStatus }}" placeholder="Civil status" required>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Save</button>

						<a class="btn btn-outline-secondary"
						href="/staff/{{ $staff->isCompleted ? $staff->id : "$staff->id/account" }}"
						role="button">Back</a>

		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection