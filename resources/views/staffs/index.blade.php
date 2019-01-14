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
			    			<th>First Name</th>
			    			<th>Middle Name</th>
			    			<th>Last Name</th>
			    			<th>Nick Name</th>
			    			<th>Birth Date</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach ($staffs as $staff)
			    			<tr class="text-center">
			    				
			    				<td>{{ $staff->idNumber }}</td>
			    				<td>{{ $staff->firstName }}</td>
			    				<td>{{ $staff->middleName }}</td>
			    				<td>{{ $staff->lastName }}</td>
			    				<td>{{ $staff->nickName }}</td>
			    				<td>{{ $staff->birthday }}</td>

			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	    	</div>
	    </div>	

@endsection