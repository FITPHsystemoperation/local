@extends('shared.master')

@section('title', 'Update Staff Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
				    <h3>Update Staff Record</h3>
		    	</div>

		    	<div class="card-body">
				    
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/edit" enctype="multipart/form-data">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="idNumber">ID No.:</label>
		    				<input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="FIT xxxx" value="{{ $staff->user['idNumber'] }}" required autofocus>
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

		    			<fieldset class="form-group">
		    			</fieldset>
		    
		    			<div class="form-group row">

			    			<div class="col-sm-1">
			    				<label for="image">Image:</label>
			    			</div>
			    			<div class="col-sm-3">
			    				<input type="file" class="form-control-file" id="image" name="image">
			    			</div>
			    			
						</div>

						<hr>
							
		    			<button type="submit" class="btn btn-primary">Update</button>
		    			
						<a class="btn btn-outline-secondary" href="/staff/{{ $staff->id }}" role="button">Back</a>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection