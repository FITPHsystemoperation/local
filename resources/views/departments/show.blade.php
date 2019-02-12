@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>{{ $department->departmentName }}</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-info" href="/department/{{ $department->id }}/edit" role="button">Rename</a>
						
						<a class="btn btn-outline-secondary" href="/departments" role="button">Go Back</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				<table class="table border-bottom">
					<thead>
						<tr class="text-center">
							<th>ID No.</th>
							<th>Full Name</th>
							<th>Job Title</th>
							<th>Status</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($department->staffs as $staff)
							<tr class="text-center">
								<td>{{ $staff->user['idNumber'] }}</td>
								
								<td>{{ "$staff->firstName $staff->lastName" }}</td>
								
								<td>{{ $staff->jobTitle['titleName'] }}</td>
								
								<td>{{ $staff->employmentStat['statDesc'] }}</td>
							</tr>
						@endforeach{{-- ($department->staffs as $staff) --}}
					</tbody>
				</table>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection