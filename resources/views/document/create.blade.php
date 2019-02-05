@extends('shared.master')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
				    <h2>New Document</h2>
	    		</div>

		    	<div class="card-body">

				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/documents/create" enctype="multipart/form-data">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="title">Title:</label>
		    				<input type="text" class="form-control" id="title" name="title" placeholder="Document Title" value="{{ old('title') }}" required autofocus>
		    			</fieldset>

		    			<div class="row">
		    				<div class="col-sm-2">
			    				<label for="file">Attach Document:</label>
		    				</div>
		    				<div class="col-sm-5">
			    				<input type="file" class="form-control-file" id="file" name="file" required>
		    				</div>
		    				<div class="col-sm-5">
			    				<span class="text-info">*Must not be greater than 10mb.</span>
		    				</div>
		    			</div>

		    			<hr>

		    			<fieldset class="form-group">
		    				<label for="category_id">Category:</label>
		    				<select class="form-control" id="category_id" name="category_id" required>
		    					<option value="" disabled selected>Select Category</option>
		    					@foreach ($categories as $category)
		    						<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
		    					@endforeach
		    				</select>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="description">Description:</label>
		    				<textarea class="form-control" rows="3" id="description" name="description">{{ old('description') }}</textarea>
		    			</fieldset>

						<hr>
		    		
		    			<button type="submit" class="btn btn-primary">Save</button>

		    			<a class="btn btn-outline-secondary" href="/documents" role="button">Back</a>
		    			
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection