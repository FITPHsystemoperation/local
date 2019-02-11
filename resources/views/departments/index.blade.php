@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>Department List</h2>
					</div>{{-- col --}}
						
					<div class="col">
						<a class="btn btn-primary float-right" href="departments/create" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				<table class="table border-bottom">
					<thead>
						<tr>
							<th>Department</th>
						</tr>
					</thead>
					
					<tbody>
						@foreach ($departments as $department)
							<tr>
								<td>
									<a href="/department/{{ $department->id }}">{{ $department->departmentName }}</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>{{-- table --}}
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
