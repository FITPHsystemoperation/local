@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>{{ ucwords($software->softwareName) }}</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-outline-secondary" href="{{ route('softwares.index') }}" role="button">Go Back</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@component ('shared.check-content', ['data' => $software->computers])
					@slot ('content')
						<table class="table border-bottom">
							<thead>
								<tr class="text-center">
									<th>Computer</th>
									
									@foreach ($software->specList as $spec)
										<th>{{ ucfirst($spec) }}</th>
									@endforeach
								</tr>
							</thead>

							<tbody>
								@foreach ($software->computers as $computer)
									<tr class="text-center">
										<td>
											<a href="{{ route('computers.show', $computer->id) }}">
												{{ $computer->computer->compName }}
											</a>
										</td>

										@foreach ($software->specList as $spec)
											<td>{{array_key_exists($spec, $computer->specs) ? $computer->specs[$spec] : '' }}</td>
										@endforeach{{-- $software->specList as $spec --}}
									</tr>
								@endforeach{{-- $software->computers as $computer --}}
							</tbody>
						</table>
					@endslot
				@endcomponent
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
