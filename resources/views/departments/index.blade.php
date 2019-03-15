@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>Department List</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-primary" href="{{ route('departments.create') }}" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				@component ('shared.check-content', ['data' => $departments])
					@slot ('content')
						<table class="table border-bottom">
							<thead class="text-center">
								<tr>
									<th>Department</th>
									<th>Members</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach ($departments as $department)
									<tr class="text-center">
										<td>
											<a href="{{ route('departments.show', $department->id) }}">{{ $department->departmentName }}</a>
										</td>

										<td><strong class="text-primary">{{ $department->staffs->count() }}</strong> member/s</td>
									</tr>
								@endforeach
							</tbody>
						</table>{{-- table --}}
					@endslot
				@endcomponent
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
