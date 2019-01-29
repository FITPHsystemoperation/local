@extends('shared.master')

@section('title', 'System Support')

@section('content')
	
	<div class="row justify-content-center">
		<div class="col-sm-8">

			<div class="card mt-3 border-secondary">

				<div class="card-header">
					
				    <h2>Software Management
				    	<a class="btn btn-primary float-right" href="/softwares/create" role="button">Add New</a>
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
				    			<th>Softwares</th>
				    			<th>Action</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		@foreach ($softwares as $software)

				    			<tr class="text-center">
				    				<td>
				    					<a href="/software/{{ $software->id }}">
					    					{{ $software->softwareName }}
				    					</a>
				    				</td>
				    				<td>
								    	<a class="btn btn-sm btn-outline-info" href="/software/{{ $software->id }}/edit" role="button">Edit</a>
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