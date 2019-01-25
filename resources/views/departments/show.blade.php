@extends('shared.master')

@section('title', "$department->departmentName")

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h2>
				    	{{ $department->departmentName }}
				    	<a class="btn btn-outline-secondary float-right" href="/departments" role="button">Back</a>
				    	<a class="btn btn-info float-right mr-2" href="/department/{{ $department->id }}/edit" role="button">Rename</a>
				    </h2>
		    		
		    	</div>

		    	<div class="card-body">

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

				    <table class="table border-bottom">
				    	<thead>
				    		<tr class="text-center">
				    			<th>ID No.</th>
				    			<th>Full Name</th>
				    			<th>Job Title</th>
				    			<th>Status</th>
				    		</tr>
				    	</thead>
				    	<tbody>

				    		@foreach ($department->staffs as $staff)
					    		<tr class="text-center">
					    			<td>{{ $staff->user['idNumber'] }}</td>
					    			<td>{{ "$staff->firstName $staff->lastName" }}</td>
					    			<td>{{ $staff->jobTitle['titleName'] }}</td>
					    			<td>{{ $staff->employmentStat['statDesc'] }}</td>
					    		</tr>
				    		@endforeach

				    	</tbody>
				    </table>

		    	</div>

		    </div>

	</div>

@endsection