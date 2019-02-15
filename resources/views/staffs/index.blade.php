@extends('shared.master')

@section('content')
	<div class="container-fluid my-3">
		<div class="card border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>Master List</h2>
					</div>{{-- col --}}
				
					<div class="col text-right">
						<a class="btn btn-primary" href="{{ route('staffs.create') }}" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				@component ('shared.check-content', ['data' => $staffs])
					@slot ('content')
						<table class="table border-bottom">
							<thead>
								<tr class="text-center">
									<th>ID No.</th>
									<th>Full Name</th>
									<th>Job Title</th>
									<th>Status</th>
									<th>Department</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($staffs as $staff)
									<tr class="text-center">
										<td>
											<a href="{{ route('staffs.show', $staff->id) }}">{{ $staff->user['idNumber'] }}</a>
										</td>

										<td>{{ "$staff->firstName $staff->lastName" }}</td>
										<td>{{ $staff->jobTitle['titleName'] }}</td>
										<td>{{ $staff->employmentStat['statDesc'] }}</td>
										<td>{{ $staff->department['departmentName'] }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					@endslot
				@endcomponent
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
