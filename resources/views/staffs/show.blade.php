@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>{{ "$staff->firstName $staff->lastName" }}</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a href="/staff/{{ $staff->id }}/edit" class="btn btn-outline-info">Update</a>

						<a class="btn btn-outline-secondary" href="/staffs" role="button">Go Back</a>
					</div>{{-- col --}}				
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include('shared.status')

				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<img src="/storage/staffs/{{ $staff->image }}" alt="{{ $staff->user['idNumber'] }}_img" class="card-img-top" alt="...">
						</div>{{-- card --}}
					</div>{{-- col-sm-3 --}}

					<div class="col-sm-9">
						<h4 class="p-2">
							<span class="lead">ID No.:</span>
							{{ $staff->user['idNumber'] }}
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
					</div>{{-- col-sm-9 --}}
				</div>{{-- row --}}
			</div>{{-- card-body --}}

			@if ( !$staff->isCompleted )
				<div class="card-footer">
					<a href="/staff/{{ $staff->id }}/working-data" class="btn btn-primary float-left mr-2">Add Information</a>

					<form method="post" action="/staff/{{ $staff->id }}/delete" class="float-left">
						@csrf
						<button type="Submit" class="btn btn-outline-danger">Delete</button>
					</form>
				</div>{{-- card-footer --}}
			@endif{{-- ( !$staff->isCompleted ) --}}
		</div>{{-- card --}}

		@if ($staff->isCompleted)
			<div class="card mt-3 border-secondary">{{-- work information --}}
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h3>Employment Information</h3>
						</div>{{-- col --}}
							
						<div class="col text-right">
							<a href="/staff/{{ $staff->id }}/working-data" class="btn btn-outline-info">Update</a>
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-header --}}

				<div class="card-body">
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
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-body --}}
			</div>{{-- card --}}

			<div class="card mt-3 border-secondary">{{-- contact-info --}}
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h3>Contact Information</h3>
						</div>{{-- col --}}
							
						<div class="col text-right">
							<a href="/staff/{{ $staff->id }}/contact-information" class="btn btn-outline-info">Update</a>
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-header --}}

				<div class="card-body">
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
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-body --}}
			</div>{{-- card --}}

			<div class="card mt-3 border-secondary">{{-- emergency information --}}
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h3>Emergency Contact Information</h3>
						</div>{{-- col --}}
							
						<div class="col text-right">
							<a href="/staff/{{ $staff->id }}/emergency" class="btn btn-outline-info">Update</a>
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-header --}}

				<div class="card-body">
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
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-body --}}
			</div>{{-- card --}}

			<div class="card mt-3 border-secondary">{{-- accounts --}}
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h3>Account Information</h3>
						</div>{{-- col --}}
						<div class="col text-right">
							<a href="/staff/{{ $staff->id }}/account" class="btn btn-outline-info">Update</a>
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>

				<div class="card-body">
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
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-body --}}
			</div>{{-- card --}}
			<div class="card mt-3 border-secondary">{{-- personal --}}
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h3>Personal Information</h3>
						</div>{{-- col --}}
							
						<div class="col text-right">
							<a href="/staff/{{ $staff->id }}/personal" class="btn btn-outline-info">Edit</a>
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>

				<div class="card-body">
					<div class="row">
						<div class="offset-md-1 col-sm-11">
							<h4 class="p-2">
								<span class="lead">Birth Date:</span>
								{{ $staff->birthday }}
							</h4>	

							<h4 class="p-2">
								<span class="lead">Gender:</span>
								{{ $staff->gender === 'm' ? 'Male' : 'Female' }}
							</h4>

							<h4 class="p-2">
								<span class="lead">Civil Status:</span>
								{{ $staff->civilStatus }}
							</h4>			    	
						</div>{{-- col --}}
					</div>{{-- row --}}
				</div>{{-- card-body --}}
			</div>{{-- card --}}
		@endif{{-- ($staff->isCompleted) --}}
	</div>{{-- container --}}
@endsection