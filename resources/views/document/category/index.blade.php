@extends('shared.master')

@section('content')
<div class="row justify-content-center">
	<div class="col-sm-8">
		
		<div class="card my-3 border-secondary">

			<div class="card-header">
				
			    <h2>Document Category
				    <a class="btn btn-primary float-right" href="/document/categories/create" role="button">Add New</a>
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
			    			<th>Category</th>
			    			<th>Description</th>
			    			<th>Action</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach ($categories as $category)
			    			<tr class="text-center">
			    				
			    				<td>
			    					<a href="/document/category/{{ $category->id }}">
				    					{{$category->categoryName}}
			    					</a>
			    				</td>
			    				<td>{{$category->description}}</td>
			    				<td>
									<a class="btn btn-sm btn-outline-info" href="/document/category/{{ $category->id }}/edit" role="button">Update</a>
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

