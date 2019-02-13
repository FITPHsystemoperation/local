@extends('shared.master')

@section('content')
	<div class="container">
		<div class="card my-3 border-dark">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h2>Document Category</h2>
					</div>{{-- col --}}
						
					<div class="col text-right">
						<a class="btn btn-primary" href="/document/categories/create" role="button">Add New</a>
					</div>{{-- col --}}
				</div>{{-- row --}}
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.status')

				<table class="table border-bottom">
					<thead>
						<tr class="text-center">
							<th>Category</th>
							<th>Description</th>
							<th>Document</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($categories as $category)
							<tr class="text-center">
								<td>
									<a href="/document/category/{{ $category->id }}">{{$category->categoryName}}</a>
								</td>
								
								<td>{{$category->description}}</td>

								<td><strong class="text-danger">{{ $category->documents->count() }}</strong> document/s</td>
							</tr>
						@endforeach{{-- $categories as $category --}}
					</tbody>
				</table>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
