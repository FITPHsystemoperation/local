@extends('shared.master')

@section('title', 'Add Mouse')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h3>Select Existing Mouse</h3>
		    		
		    	</div>

		    	<div class="card-body">

				    <form method="post" action="/computer/{{$id}}/mouse/add">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="mouse_id">Select Mouse</label>
				    		<select class="c-select form-control" id="mouse_id" name="mouse_id" required>
				    			@foreach ($mouses as $mouse)
				    				<option
				    					value="{{ $mouse->id }}"
				    					{{ $mouse->computer_id ? 'disabled' : '' }} 
				    				>{{ $mouse->mouseName }}</option>
				    			@endforeach
				    		</select>
				    	</fieldset>

			    		<button type="submit" class="btn btn-primary">Save</button>
			    		
			    		<a class="btn btn-outline-secondary" href="/computer/{{$id}}" role="button">Back</a>

				    </form>

		    	</div>

		    </div>

		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h3>Add New Mouse</h3>
		    		
		    	</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

				    <form method="post" action="/mouses/create">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="mouseName">Mouse Name</label>
				    		<input type="text" class="form-control" name="mouseName" placeholder="Mouse name" value="{{ old('mouseName') }}" required>
				    	</fieldset>

			    		<button type="submit" class="btn btn-primary">Add</button>

			    		<button type="reset" class="btn btn-outline-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection