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
		    				<label for="compName">Computer Name</label>
		    				<input type="text" class="form-control" id="compName" name="compName" value="{{ $computer->compName }}" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="os">Operating System</label>
		    				<input type="text" class="form-control" id="os" name="os" value="{{ $computer->os }}" >
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="status">Computer Status</label>
		    				<input type="text" class="form-control" id="status" name="status" value="{{ $computer->status }}" >
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="information">Computer Information</label>
		    				<textarea class="form-control" id="information" name="information" rows="3">{{ $computer->information }}</textarea>
		    			</fieldset>
		    		
						<hr>

		    			<button type="submit" class="btn btn-primary">Update</button>
		    			
		    			<a class="btn btn-outline-secondary" href="/computer/{{ $computer->id }}" role="button">Back</a>
		    		
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection