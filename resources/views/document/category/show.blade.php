@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>{{ $category->categoryName }}</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-outline-info" href="{{ route('document.category.edit', $category->id) }}">Update</a>
						
						<a class="btn btn-outline-secondary" href="{{ route('document.category.index') }}" role="button">Go Back</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				@component ('shared.check-content', ['data' => $category->documents])
					@slot ('content')
						<table class="table border-bottom">
							<thead>
								<tr class="text-center">
									<th>Title</th>
									<th>Uploaded Date</th>
									<th>File</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($category->documents as $document)
									<tr class="text-center">
										<td>
											<a href="{{ route('documents.show', $document->id) }}">{{$document->title}}</a>
										</td>

										<td>{{ date('M d, Y', strtotime($document->files->last()->created_at)) }}</td>
										
										<td>
											<a href="/storage/documents/{{ $document->files->last()->filename }}" target="_blank">
												{{ $document->files->last()->filename }}
											</a>
										</td>
									</tr>
								@endforeach{{-- $category->documents as $document --}}
							</tbody>
						</table>
					@endslot
				@endcomponent
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
