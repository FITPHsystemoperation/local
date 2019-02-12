@extends('shared.master')

@section('content')
	<div class="container my-3">
		<div class="card mt-3 border-secondary">
			<div class="card-header">
				<h2>Update Category</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="/document/category/{{ $category->id }}/edit">

					@csrf

					<div class="form-group row">
						<label for="categoryName" class="col-md-3 col-form-label text-md-right">Category:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category" value="{{ $category->categoryName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="description" class="col-md-3 col-form-label text-md-right">Description:</label>
							
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="description" name="description">{{ $category->description }}</textarea>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-outline-secondary" href="/document/category/{{ $category->id }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
