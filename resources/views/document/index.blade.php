@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>Documents</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-primary" href="/documents/create" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				<table class="table border-bottom">
					<thead>
						<tr class="text-center">
							<th>Title</th>
							<th>Category</th>
							<th>Uploaded Date</th>
							<th>File</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($documents as $document)
							<tr class="text-center">
								<td>
									<a href="/document/{{ $document->id }}">{{$document->title}}</a>
								</td>

								<td>{{ $document->category->categoryName }}</td>
								
								<td>{{ date('M d, Y', strtotime($document->files->last()->created_at)) }}</td>
								
								<td>
									<a href="/storage/documents/{{ $document->files->last()->filename }}" target="_blank">
										{{ $document->files->last()->filename }}
									</a>
								</td>
							</tr>
						@endforeach{{-- $documents as $document --}}
					</tbody>
				</table>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection

