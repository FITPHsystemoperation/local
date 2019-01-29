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
				    			<th>Computer</th>
				    			@foreach ($software->specList as $spec)
				    				<th>{{ ucfirst($spec) }}</th>
				    			@endforeach
				    		</tr>
				    	</thead>
				    	<tbody>
				    			@foreach ($software->computers as $computer)
						    		<tr class="text-center">
						    			<td>
						    				<a href="/computer/{{ $computer->computer->id }}">
							    				{{ $computer->computer->compName }}
						    				</a>
						    			</td>
						    			@foreach ($software->specList as $spec)
						    				<td>{{ 
						    					array_key_exists($spec, $computer->specs) ?
						    					$computer->specs[$spec] : '' }}
						    				</td>
						    			@endforeach
						    		</tr>
				    			@endforeach
				    	</tbody>
				    </table>
		    	</div>
		    </div>	
		</div>
	</div>

	

@endsection