@extends('shared.master')

@section('title', 'System Support')

@section('content')
	
	<div class="row justify-content-center">
		<div class="col-sm-8">
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

			<div class="card mt-3">
			    	<div class="card-body">
					    <h1 class="card-title">Department List</h1>
					    <a class="btn btn-primary" href="departments/create" role="button">Add New</a>
					    
					    <table class="table mt-2 border-bottom">
					    	<thead>
					    		<tr>
					    			<th>Department</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    		@foreach ($departments as $department)
					    			<tr>
					    				
					    				<td>
					    					<a href="/department/{{ $department->id }}">{{ $department->departmentName }}</a>
					    				</td>

					    			</tr>
					    		@endforeach
					    	</tbody>
					    </table>
			    	</div>
			    </div>	
		</div>
	</div>

	

@endsection