@extends('shared.master')

@section('title', 'Working Data')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">

		    <h1 class="card-title m-3">{{ "$staff->firstName $staff->lastName" }}</h1>
			
		    <div class="card">

		    	<div class="card-body">
				    
				    <h4>Update Work Related Data</h4>

				    <hr>

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/staff/{{ $staff->id }}/working-data">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="dateHired">Date Hired:</label>
		    				<input type="date" class="form-control" id="dateHired" name="dateHired" value="{{ $staff->dateHired }}" required>
		    			</fieldset>

		    			<fieldset class="form-group">
				    		<label for="employmentStat_id">Employment Status:</label>
				    		<select class="c-select form-control" id="employmentStat_id" name="employmentStat_id" required>
				    			@foreach ($stats as $stat)
				    				<option
				    					value="{{ $stat->id }}"
				    					{{ $staff->employmentStat_id === $stat->id ? 'selected' : '' }}
				    				>{{ $stat->statDesc }}</option>
				    			@endforeach
				    		</select>
				    	</fieldset>

				    	<fieldset class="form-group">
				    		<label for="jobTitle_id">Job Title:</label>
				    		<select class="c-select form-control" id="jobTitle_id" name="jobTitle_id" required>
				    			@foreach ($titles as $title)
				    				<option
				    					value="{{ $title->id }}"
				    					{{ $staff->jobTitle_id === $title->id ? 'selected' : '' }}
				    				>{{ $title->titleName }}</option>
				    			@endforeach
				    		</select>
				    	</fieldset>

				    	<fieldset class="form-group">
				    		<label for="department_id">Department:</label>
				    		<select class="c-select form-control" id="department_id" name="department_id" required>
				    			@foreach ($departments as $department)
				    				<option
				    					value="{{ $department->id }}"
				    					{{ $staff->department_id === $department->id ? 'selected' : '' }}
				    				>{{ $department->departmentName }}</option>
				    			@endforeach
				    		</select>
				    	</fieldset>

				    	<fieldset class="form-group">
		    				<label for="dailyRate">Daily Rate:</label>
		    				<input type="number" class="form-control" id="dailyRate" name="dailyRate" value="{{ $staff->dailyRate }}" required>
		    			</fieldset>
		    
						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Next</button>
		    			
						<a class="btn btn-outline-secondary" href="/staff/{{ $staff->id }}" role="button">Back</a>

		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection