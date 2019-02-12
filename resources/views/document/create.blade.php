@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card border-secondary">
			<div class="card-header">
				<h2>New Document</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="/documents/create" enctype="multipart/form-data">
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

							<a class="btn btn-outline-secondary" href="/documents" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection