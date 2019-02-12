@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>{{ $category->categoryName }}</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-outline-info" href="/document/category/{{ $category->id }}/edit">Update</a>
						
						<a class="btn btn-outline-secondary" href="/document/categories" role="button">Go Back</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

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
									<a href="/document/{{ $document->id }}">{{$document->title}}</a>
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
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
