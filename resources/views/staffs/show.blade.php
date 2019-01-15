@extends('shared.master')

@section('title', "$staff->firstName $staff->lastName")

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h1 class="card-title">{{ "$staff->firstName $staff->lastName" }}</h1>

				    <hr>

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

		    		<div class="row">

		    			<div class="col-sm-3">
		    				<div class="card">
								<img src="/images/staffs/{{ $staff->image }}" class="card-img-top" alt="...">
							</div>
		    			</div>
		    			
		    			<div class="col-sm-9">
		    				<h4 class="p-2">
								<span class="lead">ID No.:</span>
								{{ $staff->idNumber }}
							</h4>	

							<h4 class="p-2">
								<span class="lead">First Name:</span>
								{{ $staff->firstName }}
							</h4>			    	

							<h4 class="p-2">
								<span class="lead">Middle Name:</span>
								{{ $staff->middleName }}
							</h4>

							<h4 class="p-2">
								<span class="lead">Last Name:</span>
								{{ $staff->lastName }}
							</h4>

							<h4 class="p-2">
								<span class="lead">Nick Name:</span>
								{{ $staff->nickName }}
							</h4>

		    			</div>
		    		</div>	
				    
					<hr>

					@if ($staff->isCompleted)

						<a href="/staff/{{ $staff->id }}/edit" class="btn btn-info float-left mr-2">Edit</a>
					
					@else

						<a href="/staff/{{ $staff->id }}/working-data" class="btn btn-primary float-left mr-2">Add Information</a>
						
					@endif
						{{-- <form method="post" action="/staff/{{ $staff->id }}/delete" class="float-left">
							@csrf
							<button type="submit" class="btn btn-outline-danger">Delete</button>					
						</form> --}}
						<a class="btn btn-outline-secondary" href="/staffs" role="button">Back</a>

		    	</div>

		    </div>

	</div>

@endsection