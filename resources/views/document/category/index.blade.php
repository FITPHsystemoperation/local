@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>Document Category</p>
	        		
	        		<a class="button is-primary is-rounded" href="{{ route('document.category.create') }}" title="Add New">
						<span class="fas fa-plus"></span>
	        		</a>
	            </div><!-- message-header -->
	        
	            <div class="message-body">
	            	@include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $categories])
						@slot ('content')
							<table class="table is-fullwidth is-bordered is-hoverable">
							    <thead>
							        <tr class="has-background-grey-light">
							            <th class="has-text-centered">Category</th>
							            <th class="has-text-centered">Description</th>
							            <th class="has-text-centered">Document</th>
							        </tr>
							    </thead>
							
							    <tbody>
						        	@foreach ($categories as $category)
								        <tr>
								            <td class="has-text-centered">
												<a href="{{ route('document.category.show', $category->id) }}">{{$category->categoryName}}</a>
								            </td>
								            <td class="has-text-centered">{{$category->description}}</td>
								            <td class="has-text-centered">
								            	<strong class="has-text-danger">{{ $category->documents->count() }}</strong> document/s
								            </td>
								        </tr>
									@endforeach{{-- $categories as $category --}}
							    </tbody>
							</table>
						@endslot
					@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
