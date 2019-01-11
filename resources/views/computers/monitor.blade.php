@extends('shared.master')

@section('title', 'Add Monitor')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">Select Existing Monitor</h1>

				    <hr>

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
			    		<button type="reset" class="btn btn-outline-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		    <div class="card mt-2">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">Add New Monitor</h1>

				    <hr>

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