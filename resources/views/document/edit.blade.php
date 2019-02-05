@extends('shared.master')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
				    <h2>Update Document Information</h2>
	    		</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/document/{{ $document->id }}/edit">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="title">Title:</label>
		    				<input type="text" class="form-control" id="title" name="title" placeholder="Document Title" value="{{ $document->title }}" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="category_id">Category:</label>
		    				<select class="form-control" id="category_id" name="category_id" required>
		    					@foreach ($categories as $category)
		    						<option value="{{ $category->id }}"
		    							{{ $category->id === $document->category_id ? 'selected' : '' }}>
		    							{{ $category->categoryName }}
		    						</option>
		    					@endforeach
		    				</select>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="description">Description:</label>
		    				<textarea class="form-control" rows="3" id="description" name="description">{{ $document->description }}</textarea>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Save</button>

		    			<a class="btn btn-outline-secondary" href="/document/{{ $document->id }}" role="button">Back</a>
		    			
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection