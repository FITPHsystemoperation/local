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

				    <hr>

		    	</div>

		    </div>

	</div>

@endsection