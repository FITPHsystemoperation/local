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
	    		            <div class="file has-name is-fullwidth">
	    		                <label class="file-label">
	    		                    <input class="file-input" type="file" id="file" @change="selectFile($event)">
	    		                    
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
		        </section><!-- modal-card-body -->
		        	
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary">Save Record</button>

		        	<a class="button" href="{{ route('documents.index') }}">Cancel</a>
		        </footer><!-- modal-card-foot -->
	        </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h2>New Document</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('documents.store') }}" enctype="multipart/form-data">
					@csrf

					<div class="form-group row">
						<label for="title" class="col-md-3 col-form-label text-md-right">Title:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="title" name="title" placeholder="Document Title" value="{{ old('title') }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="file" class="col-md-3 col-form-label text-md-right">Attach Document:</label>
						
						<div class="col-md-7">
							<input type="file" class="form-control-file" id="file" name="file" required>

							<small class="form-text text-muted">
								<strong>Must not be greater than 10mb</strong>
							</small>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="category_id" class="col-md-3 col-form-label text-md-right">Category:</label>
							
						<div class="col-md-7">
							<select class="form-control" id="category_id" name="category_id" required>
								<option value="" disabled selected>Select Category</option>
								
								@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
								@endforeach{{-- $categories as $category --}}
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="description" class="col-md-3 col-form-label text-md-right">Description:</label>
							
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="description" name="description">{{ old('description') }}</textarea>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-outline-secondary" href="{{ route('documents.index') }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection