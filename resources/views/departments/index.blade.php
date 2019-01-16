@extends('shared.master')

@section('title', 'System Support')

@section('content')
	
	<div class="row justify-content-center">
		<div class="col-sm-8">

			<div class="card mt-3 border-secondary">

				<div class="card-header">
					
				    <h2>Department List
				    	<a class="btn btn-primary float-right" href="departments/create" role="button">Add New</a>
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