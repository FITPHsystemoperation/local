@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>Software Management</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-primary" href="/softwares/create" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				<table class="table border-bottom">
					<thead>
						<tr class="text-center">
							<th>Softwares</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($softwares as $software)
							<tr class="text-center">
								<td>
									<a href="/software/{{ $software->id }}">{{ $software->softwareName }}</a>
								</td>
								
								<td>
									<a class="btn btn-sm btn-outline-info" href="/software/{{ $software->id }}/edit" role="button">Edit</a>
								</td>
							</tr>
						@endforeach{{-- $softwares as $software --}}
					</tbody>
				</table>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
