@extends('shared.master')

@section('content')
<div class="row justify-content-center">
	<div class="col-sm-8">
		
		<div class="card my-3 border-secondary">

			<div class="card-header">
				
			    <h2>Documents
				    <a class="btn btn-primary float-right" href="/documents/create" role="button">Add New</a>
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
			    			<th>Latest File</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach ($documents as $document)
			    			<tr class="text-center">
			    				
			    				<td>
			    					<a href="/document/{{ $document->id }}">
				    					{{$document->title}}
			    					</a>
			    				</td>
			    				<td>{{ $document->category->categoryName }}</td>

			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
	    	</div>
	    </div>
	</div>
</div>

@endsection

