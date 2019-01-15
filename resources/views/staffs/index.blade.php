@extends('shared.master')

@section('title', 'System Support')

@section('content')

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<div class="card mt-3">
	    	<div class="card-body">
			    <h1 class="card-title">Master List</h1>
			    <a class="btn btn-primary" href="staffs/create" role="button">Add New</a>
			    
			    <table class="table mt-2 border-bottom">
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
			    				<td>{{ $staff->jobTitle }}</td>
			    				<td>{{ $staff->employmentStat }}</td>
			    				<td>{{ $staff->department }}</td>

			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	    	</div>
	    </div>	

@endsection