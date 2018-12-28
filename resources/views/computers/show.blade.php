@extends('shared.master')

@section('title', $computer->compName)

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-5">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">{{ $computer->compName }}</h1>

				    <hr>

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

					<h4 class="p-2">
						<span class="lead">User Name:</span>
						{{ $computer->userName }}
					</h4>				    	

					<h4 class="p-2">
						<span class="lead">User Password:</span>
						{{ $computer->userPass }}
					</h4>

					<h4 class="p-2">
						<span class="lead">Admin Password:</span>
						{{ $computer->adminPass }}
					</h4>

					<h4 class="p-2">
						<span class="lead">Computer Specs:</span>
					</h4>
					<ul>
						<li>{{ $computer->specs }}</li>
					</ul>
				    
					<h4 class="p-2">
						<span class="lead">With WillsBuster:</span>
						{!! $computer->withWbuster ? '&#10004;' : '&#10060;' !!}
					</h4>

					<h4 class="p-2">
						<span class="lead">With Skysea:</span>
						{!! $computer->withSkysea ? '&#10004;' : '&#10060;' !!}
					</h4>

					<hr>

					<a href="{{ action('ComputersController@edit', $computer->id) }}" class="btn btn-info">Edit</a>
					<a href="{{ action('ComputersController@index') }}" class="btn btn-secondary">Back</a>

		    	</div>

		    </div>

		    <div class="card mt-3">
		    	
		    	<div class="card-body">
				    
				    <h1 class="card-title">Accessories</h1>

				    <hr>
		    	
		    		<h4 class="p-2">
						<span class="lead">Mouse:</span>
						@if ($mouse)
							{!! $mouse->mouseName !!}
							<form
								method="post"
								action="{{ action('ComputerMouseController@destroy' ,$computer->id) }}"
								class="float-right"
							>

								@csrf

								<button type="submit" class="btn btn-danger">Remove</button>
							</form>
						@else
							&#10060;
							<a class="btn btn-primary float-right"
								href="{{ action('ComputerMouseController@index', $computer->id) }}"
								role="button"
							>Add</a>
						@endif
					</h4>

				    <hr>

			    	<h4 class="p-2">
						<span class="lead">Keyboard:</span>
						Under Development
						{{-- <button type="button" class="btn btn-primary float-right">Add</button> --}}
					</h4>

		    	</div>

		    </div>

		</div>

	</div>

@endsection