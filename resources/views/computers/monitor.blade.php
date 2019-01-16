@extends('shared.master')

@section('title', 'Add Monitor')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h3>Select Existing Monitor</h3>
		    		
		    	</div>

		    	<div class="card-body">

				    <form method="post" action="/computer/{{$id}}/monitor/add">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="monitor_id">Select Monitor</label>
				    		<select class="c-select form-control" id="monitor_id" name="monitor_id" required>
				    			@foreach ($monitors as $monitor)
				    				<option
				    					value="{{ $monitor->id }}"
				    					{{ $monitor->computer_id ? 'disabled' : '' }} 
				    				>{{ $monitor->monitorName }}</option>
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
		    		
				    <h3>Add New Monitor</h3>
		    		
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

				    <form method="post" action="/monitors/create">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="monitorName">Monitor Name</label>
				    		<input type="text" class="form-control" name="monitorName" placeholder="Monitor name" value="{{ old('monitorName') }}" required>
				    	</fieldset>

			    		<button type="submit" class="btn btn-primary">Add</button>

			    		<button type="reset" class="btn btn-outline-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection