@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">New Document</p>

	            <a class="delete" aria-label="close" href="{{ route('documents.index') }}">Button</a>
	        </header><!-- modal-card-head -->

	        <form method="post" action="{{ route('documents.store') }}" enctype="multipart/form-data">
				@csrf
			
		        <section class="modal-card-body">
		    		<div class="field">
	    		        <label class="label" for="title">Title:</label>
	    		    
	    		        <div class="control has-icons-right">
	    		            <input type="text" id="title" name="title" placeholder="Document Title"
		    		            class="input {{ $errors->has('title') ? ' is-danger' : '' }}"
		    		            value="{{ old('title') }}" required autofocus>

		    		        <span class="icon is-small is-right">
		    		            <i class="fas fa-file-alt"></i>
		    		        </span><!-- icon -->
	    		        </div><!-- control -->

	    		        <p class="help is-danger">{{ $errors->first('title') }}</p>
	    		    </div><!-- field -->

	    		    <div class="field">
	    		    	<label class="label" for="file">Attach Document:</label>

	    		        <div class="control">
	    		            <div class="file has-name is-fullwidth {{ $errors->has('file') ? ' is-danger' : '' }}">
	    		                <label class="file-label">
	    		                    <input class="file-input" type="file" id="file" name="file" @change="selectFile($event)" required>
	    		                    
	    		                    <span class="file-cta">
	    		                        <span class="file-icon">
	    		                            <i class="fas fa-upload"></i>
	    		                        </span>
	    		            
	    		                        <span class="file-label">Choose a file…</span>
	    		                    </span><!-- file-cta -->
	    		            
	    		                    <span class="file-name">@{{ filename }}</span>
	    		                </label><!-- file-label -->
	    		            </div><!-- file -->
	    		        </div><!-- control -->

	    		        <p class="help is-danger">{{ $errors->first('file') }}</p>
	    		    </div><!-- field -->

	    		    <div class="field">
	    		        <label class="label" for="category_id">Category:</label>
	    		    
	    		        <div class="control">
	    		        	<div class="select is-fullwidth {{ $errors->has('title') ? ' is-danger' : '' }}">
	    		        	    <select id="category_id" name="category_id" required>
									<option value="" disabled selected>Select Category</option>
									
									@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
									@endforeach{{-- $categories as $category --}}
	    		        	    </select>
	    		        	</div><!-- select -->
	    		        </div><!-- control -->

	    		        <p class="help is-danger">{{ $errors->first('category_id') }}</p>
	    		    </div><!-- field -->
					
					<div class="field">
					    <label class="label" for="description">Description:</label>
					
					    <div class="control">
							<textarea id="description" name="description" rows="3" placeholder="Document description" class="textarea">{{ old('description') }}</textarea>
					    </div><!-- control -->
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        	
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary">Save Record</button>

		        	<a class="button" href="{{ route('documents.index') }}">Cancel</a>
		        </footer><!-- modal-card-foot -->
	        </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection