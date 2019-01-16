@extends('shared.master')

@section('title', 'System Support')

@section('content')

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<div class="card mt-3 border-secondary">
		<div class="card-header">
		    <h2>Master List
		    	<a class="btn btn-primary float-right" href="staffs/create" role="button">Add New</a>
		    </h2>
		</div>
    	<div class="card-body">
		    
		    <table class="table border-bottom">
		    	<thead>
		    		<tr class="text-center">
		    			<th>ID No.</th>
		    			<th>Full Name</th>
		    			<th>Job Title</th>
		    			<th>Status</th>
		    			<th>Department</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		@foreach ($staffs as $staff)
		    			<tr class="text-center">
		    				
		    				<td>
		    					<a href="/staff/{{ $staff->id }}">{{ $staff->idNumber }}</a>
		    				</td>
		    				<td>{{ "$staff->firstName $staff->lastName" }}</td>
		    				<td>{{ $staff->jobTitle['titleName'] }}</td>
		    				<td>{{ $staff->employmentStat['statDesc'] }}</td>
		    				<td>{{ $staff->department['departmentName'] }}</td>

		    			</tr>
		    		@endforeach
		    	</tbody>
		    </table>
    	</div>
    </div>	

@endsection