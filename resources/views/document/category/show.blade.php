@extends('shared.master')

@section('content')
<div class="row justify-content-center">
	<div class="col-sm-8">
		
		<div class="card my-3 border-secondary">

			<div class="card-header">
				
			    <h2>
			    	{{ $category->categoryName }}
			    	<a class="btn btn-outline-secondary float-right" href="/document/categories" role="button">Back</a>
					<a href="/document/category/{{ $category->id }}/edit" class="btn btn-outline-info float-right mr-2">Edit</a>
			    </h2>
				
			</div>

	    	<div class="card-body">
			    
			    @if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif

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
			    					<a href="/document/{{ $document->id }}">
				    					{{$document->title}}
			    					</a>
			    				</td>
			    				<td>{{ date('M d, Y', strtotime($document->files->last()->created_at)) }}</td>
			    				<td>
			    					<a href="/storage/documents/{{ $document->files->last()->filename }}" target="_blank">
				    					{{ $document->files->last()->filename }}
			    					</a>
			    				</td>
			    				
			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	    	</div>
	    </div>
	</div>
</div>

@endsection

