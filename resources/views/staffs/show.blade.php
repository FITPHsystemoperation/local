@extends('shared.master')

@section('title', "$staff->firstName $staff->lastName")

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h1 class="card-title">
				    	{{ "$staff->firstName $staff->lastName" }}
						<a class="btn btn-outline-secondary float-right" href="/staffs" role="button">Back</a>
						<a href="/staff/{{ $staff->id }}/edit" class="btn btn-outline-info float-right mr-2">Edit</a>
				    </h1>

				    <hr>

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

		    		<div class="row">

		    			<div class="col-sm-3">
		    				<div class="card">
								<img src="/storage/staffs/{{ $staff->image }}" alt="{{ $staff->idNumber }}_img" class="card-img-top" alt="...">
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
				    
					@if ( !$staff->isCompleted )

						<hr>

						<a href="/staff/{{ $staff->id }}/working-data" class="btn btn-primary float-left mr-2">Add Information</a>

						<form method="post" action="/staff/{{ $staff->id }}/delete" class="float-left">
							@csrf
							<button type="Submit" class="btn btn-outline-danger">Delete</button>
						</form>
						
					@endif
						

		    	</div>
	
	    	</div>

	    </div>

	</div>

	@if ($staff->isCompleted)

		<div class="row justify-content-center">
		
			<div class="col-sm-8">
				
			    <div class="card mt-3">

			    	<div class="card-body">
					    
					    <h3 class="card-title">
					    	Employment Information
					    	<a href="/staff/{{ $staff->id }}/working-data" class="btn btn-outline-info float-right">Edit</a>
					    </h3>

					    <hr>

			    		<div class="row">

			    			<div class="offset-md-1 col-sm-11">

			    				<h4 class="p-2">
									<span class="lead">Date Hired:</span>
									{{ $staff->dateHired }}
								</h4>	

								<h4 class="p-2">
									<span class="lead">Employment Status:</span>
									{{ $staff->employmentStat['statDesc'] }}
								</h4>			    	

								<h4 class="p-2">
									<span class="lead">Job Title:</span>
									{{ $staff->jobTitle['titleName'] }}
								</h4>

								<h4 class="p-2">
									<span class="lead">Department:</span>
									{{ $staff->department['departmentName'] }}
								</h4>

								<h4 class="p-2">
									<span class="lead">Daily Rate:</span>
									{{ $staff->dailyRate }}
								</h4>

			    			</div>

			    		</div>	

			    	</div>
		
		    	</div>

		    </div>

		</div>

		<div class="row justify-content-center">
		
			<div class="col-sm-8">
				
			    <div class="card mt-3">

			    	<div class="card-body">
					    
					    <h3 class="card-title">
					    	Contact Information
					    	<a href="/staff/{{ $staff->id }}/contact-information" class="btn btn-outline-info float-right">Edit</a>
					    </h3>

					    <hr>

			    		<div class="row">

			    			<div class="offset-md-1 col-sm-11">

			    				<h4 class="p-2">
									<span class="lead">Contact No:</span>
									{{ $staff->contactNo }}
								</h4>	

								<h4 class="p-2">
									<span class="lead">Email Address:</span>
									{{ $staff->emailAddress }}
								</h4>			    	

								<h4 class="p-2">
									<span class="lead">Permanent Address:</span>
									{{ $staff->permanentAddress }}
								</h4>

								<h4 class="p-2">
									<span class="lead">Present Address:</span>
									{{ $staff->presentAddress }}
								</h4>

			    			</div>

			    		</div>	

			    	</div>
		
		    	</div>

		    </div>

		</div>

		<div class="row justify-content-center">
		
			<div class="col-sm-8">
				
			    <div class="card mt-3">

			    	<div class="card-body">
					    
					    <h3 class="card-title">
					    	Emergency Contact Information
					    	<a href="/staff/{{ $staff->id }}/emergency" class="btn btn-outline-info float-right">Edit</a>
					    </h3>

					    <hr>

			    		<div class="row">

			    			<div class="offset-md-1 col-sm-11">

			    				<h4 class="p-2">
									<span class="lead">Contact Person:</span>
									{{ $staff->emergencyPerson }}
								</h4>	

								<h4 class="p-2">
									<span class="lead">Contact No:</span>
									{{ $staff->emergencyNo }}
								</h4>			    	

								<h4 class="p-2">
									<span class="lead">Relationship:</span>
									{{ $staff->emergencyRelation }}
								</h4>

			    			</div>

			    		</div>	

			    	</div>
		
		    	</div>

		    </div>

		</div>

		<div class="row justify-content-center">
		
			<div class="col-sm-8">
				
			    <div class="card mt-3">

			    	<div class="card-body">
					    
					    <h3 class="card-title">
					    	Account Information
					    	<a href="/staff/{{ $staff->id }}/account" class="btn btn-outline-info float-right">Edit</a>
					    </h3>

					    <hr>

			    		<div class="row">

			    			<div class="offset-md-1 col-sm-11">

			    				<h4 class="p-2">
									<span class="lead">B.I.R. No.:</span>
									{{ $staff->birNo }}
								</h4>	

								<h4 class="p-2">
									<span class="lead">S.S.S. No:</span>
									{{ $staff->sssNo }}
								</h4>			    	

								<h4 class="p-2">
									<span class="lead">Pagibig No.:</span>
									{{ $staff->pagibigNo }}
								</h4>

								<h4 class="p-2">
									<span class="lead">Philhealth No.:</span>
									{{ $staff->philhealthNo }}
								</h4>

								<h4 class="p-2">
									<span class="lead">Bank Account No.:</span>
									{{ $staff->bankNo }}
								</h4>

			    			</div>

			    		</div>	

			    	</div>
		
		    	</div>

		    </div>

		</div>

		<div class="row justify-content-center">
		
			<div class="col-sm-8">
				
			    <div class="card mt-3">

			    	<div class="card-body">
					    
					    <h3 class="card-title">
					    	Personal Information
					    	<a href="/staff/{{ $staff->id }}/personal" class="btn btn-outline-info float-right">Edit</a>
					    </h3>

					    <hr>

			    		<div class="row">

			    			<div class="offset-md-1 col-sm-11">

			    				<h4 class="p-2">
									<span class="lead">Birth Date:</span>
									{{ $staff->birthday }}
								</h4>	

								<h4 class="p-2">
									<span class="lead">Civil Status:</span>
									{{ $staff->civilStatus }}
								</h4>			    	

			    			</div>

			    		</div>	

			    	</div>
		
		    	</div>

		    </div>

		</div>

	@endif

@endsection