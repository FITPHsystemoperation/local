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
						<a class="btn btn-primary" href="{{ route('softwares.create') }}" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				@component ('shared.check-content', ['data' => $softwares])
					@slot ('content')
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
											<a href="{{ route('softwares.show', $software->id) }}">{{ $software->softwareName }}</a>
										</td>
										
										<td>
											<a class="btn btn-sm btn-outline-info" href="{{ route('softwares.edit', $software->id) }}" role="button">Update</a>
										</td>
									</tr>
								@endforeach{{-- $softwares as $software --}}
							</tbody>
						</table>
					@endslot
				@endcomponent
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
