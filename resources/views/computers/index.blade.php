@extends('shared.master')

@section('title', 'Computers')

@section('content')
	
    @if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<div class="card mt-3">
	    	<div class="card-body">
			    <h1 class="card-title">Computer Inventory</h1>
			    <a class="btn btn-primary" href="computers/create" role="button">Add New</a>
			    
			    <table class="table mt-2 border-bottom">
			    	<thead>
			    		<tr class="text-center">
			    			<th>CompName</th>
			    			<th>UserName</th>
			    			<th>UserPass</th>
			    			<th>WillsBuster</th>
			    			<th>SkySea</th>
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
			    				<td>{{$computer->userName}}</td>
			    				<td>{{$computer->userPass}}</td>
			    				<td>{!! $computer->withWbuster ? '&#10004;' : '&#10060;' !!}</td>
			    				<td>{!! $computer->withSkysea ? '&#10004;' : '&#10060;' !!}</td>

			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	    	</div>
	    </div>

@endsection

