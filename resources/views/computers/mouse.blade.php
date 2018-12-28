@extends('shared.master')

@section('title', 'Add Mouse')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-5">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">Select Existing Record</h1>

				    <hr>

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
			    		<button type="reset" class="btn btn-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		    <div class="card mt-2">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">Add New Record</h1>

				    <hr>

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
				    		<input type="text" class="form-control" name="mouseName" placeholder="Mouse name" required>
				    	</fieldset>

			    		<button type="submit" class="btn btn-primary">Add</button>
			    		<button type="reset" class="btn btn-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection