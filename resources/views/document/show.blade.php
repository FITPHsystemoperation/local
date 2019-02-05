@extends('shared.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-sm-8">
		
		<div class="card my-3 border-secondary">

			<div class="card-header">
				
			    <h2>{{ $document->title }}</h2>
				
			</div>

	    	<div class="card-body">
			    
			    @if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif

				@foreach ($errors->all() as $error)
				    <p class="alert alert-danger">{{ $error }}</p>
				@endforeach

			   <h4 class="p-2">
					<span class="lead">Category:</span>
					{{ $document->category->categoryName }}
				</h4>

				<h4 class="p-2">
					<span class="lead">Description:</span>
					{{ $document->description }}
				</h4>				    	

	    	</div>

	    	<div class="card-footer">
		    		
				<a href="/document/{{ $document->id }}/edit" class="btn btn-info">Edit</a>
				<a href="/documents" class="btn btn-outline-secondary">Back</a>
	    	
	    	</div>
	    </div>

	    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h4>
				    	Files
				    	<button type="button" class="btn btn-primary float-right"
				    		onclick="document.getElementById('file').click();"
				    		>Upload</button>
				    </h4>

				    <form  method="post" action="/document/{{ $document->id }}/upload" enctype="multipart/form-data">
				    	@csrf
				    	<input type="file" id="file" name="file" style="display: none;" onchange="this.form.submit();"/>
				    </form>
		    		
		    	</div>

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
							@endforeach
						</tbody>
					</table>

			    </div>

		    </div>
	</div>
</div>

@endsection

