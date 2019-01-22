@extends('shared.master')

@section('title', 'Add Keyboard')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h3>Select Existing Keyboard</h3>
		    		
		    	</div>

		    	<div class="card-body">

				    <form method="post" action="/computer/{{$id}}/keyboard/add">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="keyboard_id">Select Keyboard</label>
				    		<select class="c-select form-control" id="keyboard_id" name="keyboard_id" required autofocus>
				    			@foreach ($keyboards as $keyboard)
				    				<option
				    					value="{{ $keyboard->id }}"
				    					{{ $keyboard->computer_id ? 'disabled' : '' }} 
				    				>{{ $keyboard->keyboardName }}</option>
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
		    		
				    <h3>Add New Keyboard</h3>
		    		
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

				    <form method="post" action="/keyboards/create">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="keyboardName">Keyboard Name</label>
				    		<input type="text" class="form-control" name="keyboardName" placeholder="Keyboard name" value="{{ old('keyboardName') }}" required>
				    	</fieldset>

			    		<button type="submit" class="btn btn-primary">Add</button>

			    		<button type="reset" class="btn btn-outline-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection