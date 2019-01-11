@extends('shared.master')

@section('title', 'Add Charger')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">Select Existing Charger</h1>

				    <hr>

				    <form method="post" action="/computer/{{$id}}/charger/add">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="charger_id">Select Charger</label>
				    		<select class="c-select form-control" id="charger_id" name="charger_id" required>
				    			@foreach ($chargers as $charger)
				    				<option
				    					value="{{ $charger->id }}"
				    					{{ $charger->computer_id ? 'disabled' : '' }} 
				    				>{{ $charger->chargerName }}</option>
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
				    
				    <h1 class="card-title mt-2">Add New Charger</h1>

				    <hr>

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

				    <form method="post" action="/chargers/create">

				    	@csrf

				    	<fieldset class="form-group">
				    		<label for="chargerName">Charger Name</label>
				    		<input type="text" class="form-control" name="chargerName" placeholder="Charger name" value="{{ old('chargerName') }}" required>
				    	</fieldset>

			    		<button type="submit" class="btn btn-primary">Add</button>
			    		<button type="reset" class="btn btn-outline-secondary">Clear</button>

				    </form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection