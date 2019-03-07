@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Update Document Information</p>

	            <a class="delete" aria-label="close" href="{{ route('documents.show', $document->id) }}"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" action="{{ route('documents.update', $document->id) }}">
				@csrf
				@method ('patch')

		        <section class="modal-card-body">
					<div class="field">
	    		        <label class="label" for="title">Title:</label>
	    		    
	    		        <div class="control has-icons-right">
	    		            <input type="text" id="title" name="title" placeholder="Document Title"
		    		            class="input {{ $errors->has('title') ? ' is-danger' : '' }}"
		    		            value="{{ $document->title }}" required autofocus>

		    		        <span class="icon is-small is-right">
		    		            <i class="fas fa-file-alt"></i>
		    		        </span><!-- icon -->
	    		        </div><!-- control -->

	    		        <p class="help is-danger">{{ $errors->first('title') }}</p>
	    		    </div><!-- field -->

	    		    <div class="field">
	    		        <label class="label" for="category_id">Category:</label>
	    		    
	    		        <div class="control">
	    		        	<div class="select is-fullwidth {{ $errors->has('category_id') ? ' is-danger' : '' }}">
	    		        	    <select id="category_id" name="category_id" >
									<option value="" disabled selected>Select Category</option>
									
									@foreach ($categories as $category)
										<option value="{{ $category->id }}"
											{{ $category->id === $document->category_id ? 'selected' : '' }}>
											{{ $category->categoryName }}
										</option>
									@endforeach{{-- $categories as $category --}}
	    		        	    </select>
	    		        	</div><!-- select -->
	    		        </div><!-- control -->

	    		        <p class="help is-danger">{{ $errors->first('category_id') }}</p>
	    		    </div><!-- field -->

	    		    <div class="field">
					    <label class="label" for="description">Description:</label>
					
					    <div class="control">
							<textarea id="description" name="description" rows="3" placeholder="Document description" class="textarea">{{ $document->description }}</textarea>
					    </div><!-- control -->
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
		            <button class="button is-primary" type="submit">Save Record</button>

		            <a class="button" href="{{ route('documents.show', $document->id) }}">Go Back</a>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
