@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">New Document Category</p>

	            <a class="delete" aria-label="close" href="{{ route('document.category.index') }}"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" action="{{ route('document.category.store') }}" @submit="submit">
				@csrf

		        <section class="modal-card-body">
					<div class="field">
					    <label class="label" for="categoryName">Category:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="categoryName" name="categoryName" placeholder="Category"
					            class="input {{ $errors->has('categoryName') ? ' is-danger' : '' }}"
					            value="{{ old('categoryName') }}" required autofocus>
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-tag"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('categoryName') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="description">Description:</label>
					
					    <div class="control">
					        <textarea id="description" name="description" rows="3" placeholder="Description" class="textarea">{{ old('description') }}</textarea>
					    </div><!-- control -->
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>
		
		            <my-link href="{{ route('document.category.index') }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
