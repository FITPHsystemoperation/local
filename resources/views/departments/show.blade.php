@extends('shared.master')

@section('title', "$department->departmentName")

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">
				    	{{ $department->departmentName }}
				    	<a class="btn btn-info float-right" href="/department/{{ $department->id }}/edit" role="button">Rename</a>
				    </h1>

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
					    			<td>{{ $staff->idNumber }}</td>
					    			<td>{{ $staff->firstName }}</td>
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