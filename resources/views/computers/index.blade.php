@extends('shared.master')

@section('title', 'Computers')

@section('content')
<div class="row justify-content-center">
	<div class="col-sm-8">
		
		<div class="card my-3 border-secondary">

			<div class="card-header">
				
			    <h2>Computer Inventory
			    	@can ('create', App\Computer::class)
					    <a class="btn btn-primary float-right" href="computers/create" role="button">Add New</a>
			    	@endcan
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
			    			<th>CompName</th>
			    			<th>Accounts</th>
			    			<th>Status</th>
			    			{{-- <th>Department</th> --}}
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach ($computers as $computer)
			    			<tr class="text-center">
			    				
			    				<td>
			    					<a href="computer/{{ $computer->id }}">
				    					{{$computer->compName}}
			    					</a>
			    				</td>
			    				<td>
			    					@foreach ($computer->accounts as $account)
				    					{{ $account['accountName'] }}
			    						{{ !$loop->last ? '/ ' : '' }}
			    					@endforeach
			    				</td>
			    				<td>{{$computer->status}}</td>
			    				{{-- <td></td> --}}

			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	    	</div>
	    </div>
	</div>
</div>

@endsection

