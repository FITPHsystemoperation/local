@extends('shared.master')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
				    <h2>Update Category</h2>
	    		</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/document/category/{{ $category->id }}/edit">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="categoryName">Category:</label>
		    				<input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category" value="{{ $category->categoryName }}" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="description">Description:</label>
		    				<textarea class="form-control" rows="3" id="description" name="description">{{ $category->description }}</textarea>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Update</button>

		    			<a class="btn btn-outline-secondary" href="/document/categories" role="button">Back</a>
		    			
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection