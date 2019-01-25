@extends('shared.master')

@section('title', 'Accounts Information')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">

		    <h1 class="card-title m-3">{{ "$staff->firstName $staff->lastName" }}</h1>
			
		    <div class="card border-secondary">

		    	<div class="card-header">

				    <h4>Update Accounts Information</h4>

		    	</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/account">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="birNo">B.I.R. No:</label>
		    				<input type="text" class="form-control" id="birNo" name="birNo" value="{{ $staff->birNo }}" placeholder="B.I.R. Number" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="sssNo">S.S.S. No:</label>
		    				<input type="text" class="form-control" id="sssNo" name="sssNo" value="{{ $staff->sssNo }}" placeholder="S.S.S. Number" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="pagibigNo">Pagibig No:</label>
		    				<input type="text" class="form-control" id="pagibigNo" name="pagibigNo" value="{{ $staff->pagibigNo }}" placeholder="Pagibig Number" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="philhealthNo">Philhealth No:</label>
		    				<input type="text" class="form-control" id="philhealthNo" name="philhealthNo" value="{{ $staff->philhealthNo }}" placeholder="Philhealth Number" required>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="bankNo">Bank Account No:</label>
		    				<input type="text" class="form-control" id="bankNo" name="bankNo" value="{{ $staff->bankNo }}" placeholder="Bank Account Number" required>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary"> 
		    				{{ $staff->isCompleted ? 'Save' : 'Next' }}
		    			</button>

						<a class="btn btn-outline-secondary"
						href="/staff/{{ $staff->isCompleted ? $staff->id : "$staff->id/emergency" }}"
						role="button">Back</a>

		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection