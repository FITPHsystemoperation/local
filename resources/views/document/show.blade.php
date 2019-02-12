@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<h2>{{ $document->title }}</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')
				@include ('shared.error')

				<h4 class="p-2">
					<span class="lead">Category:</span>
					{{ $document->category->categoryName }}
				</h4>

				<h4 class="p-2">
					<span class="lead">Description:</span>
					{{ $document->description }}
				</h4>				    	
			</div>{{-- card-body --}}

			<div class="card-footer">
				<a href="/document/{{ $document->id }}/edit" class="btn btn-info">Update</a>

				<a href="/documents" class="btn btn-outline-secondary">Go Back</a>
			</div>{{-- card-footer --}}
		</div>{{-- card --}}

		<div class="card mt-3 border-secondary">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h4>Uploaded Files</h4>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<button type="button" class="btn btn-primary" onclick="document.getElementById('file').click();">
							Upload New
						</button>
					</div>{{-- col --}}
				</div>{{-- row --}}

				<form  method="post" action="/document/{{ $document->id }}/upload" enctype="multipart/form-data">
					@csrf
					<input type="file" id="file" name="file" style="display: none;" onchange="this.form.submit();"/>
				</form>
			</div>{{-- card-header --}}

			<div class="card-body">
				<table class="table border-bottom">
					<thead>
						<tr class="text-center">
							<th>File Name</th>
							<th>Date</th>
							<th>Time</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($document->files->reverse() as $file)
							<tr class="text-center">
								<td>
									<a href="/storage/documents/{{ $file->filename }}" target="_blank">{{ $file->filename }}</a>
								</td>

								<td>{{ date('M d, Y', strtotime($file->created_at)) }}</td>
								
								<td>{{ date('h:i A', strtotime($file->created_at)) }}</td>
							</tr>
						@endforeach{{-- $document->files->reverse() as $file --}}
					</tbody>
				</table>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection

