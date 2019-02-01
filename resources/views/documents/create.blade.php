@extends('shared.master')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
				    <h2>New Document</h2>
	    		</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/documents/create" enctype="multipart/form-data">

		    			@csrf

		    			{{-- <fieldset class="form-group">
		    				<label for="idNumber">ID No.:</label>
		    				<input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="FIT xxxx" value="{{ old('idNumber') }}" required autofocus>
		    			</fieldset> --}}

		    			<input type="file" name="pdf">

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Save</button>

		    			<a class="btn btn-outline-secondary" href="/staffs" role="button">Back</a>
		    			
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection