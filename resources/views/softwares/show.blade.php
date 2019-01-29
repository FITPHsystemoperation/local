@extends('shared.master')

@section('title', 'System Support')

@section('content')
	
	<div class="row justify-content-center">
		<div class="col-sm-8">

			<div class="card mt-3 border-secondary">

				<div class="card-header">
					
				    <h2>{{ $software->softwareName }}
				    	<a class="btn btn-outline-secondary float-right" href="/softwares" role="button">Back</a>
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
				    			@foreach ($software->specList as $spec)
				    				<th>{{ ucfirst($spec) }}</th>
				    			@endforeach
				    		</tr>
				    	</thead>
				    	<tbody>

				    	</tbody>
				    </table>
		    	</div>
		    </div>	
		</div>
	</div>

	

@endsection