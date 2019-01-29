@extends('shared.master')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
	    			
				    <h3>Edit {{ $computer_software->software->softwareName }} Details</h3>
	    			
	    		</div>

		    	<div class="card-body">
		    		<form method="post" action="/computer-software/{{ $computer_software->id }}/edit">

						@csrf
						@foreach ($computer_software->software->specList as $spec)
							<fieldset class="form-group">
								<label for="{{ $spec }}">{{ ucfirst($spec) }}:</label>
								<input type="text" class="form-control" id="{{ $spec }}" name="{{ $spec }}"
									value="{{ $computer_software->specs[$spec] }}" {{ $loop->first ? 'autofocus' : '' }} >
							</fieldset>
						@endforeach

						<hr>

						<button type="submit" class="btn btn-primary">Save</button>

						<a class="btn btn-outline-secondary" href="/computer/{{$computer_software->computer->id}}" role="button">Back</a>

					</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection