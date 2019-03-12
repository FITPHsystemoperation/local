@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>{{ $category->categoryName }}</p>
	        
	        		<div class="buttons">
		        		<my-link class="is-warning is-rounded" lined="true" href="{{ route('document.category.edit', $category->id) }}" title="Update">
							<span class="fas fa-edit"></span>
		        		</my-link>

		        		<my-link class="is-success is-rounded" lined="true" href="{{ route('document.category.index') }}" title="Go Back">
							<span class="fas fa-arrow-left"></span>
		        		</my-link>
	        		</div>
	            </div><!-- message-header -->
	        
	            <div class="message-body">
					@include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $category->documents])
						@slot ('content')
							<table class="table is-fullwidth is-bordered is-hoverable">
							    <thead>
							        <tr class="has-background-grey-light">
							            <th class="has-text-centered">Title</th>
							            <th class="has-text-centered">Uploaded Date</th>
							            <th class="has-text-centered">File</th>
							        </tr>
							    </thead>
							
							    <tbody>
									@foreach ($category->documents as $document)
										<tr class="text-center">
								            <td class="has-text-centered">
												<a href="{{ route('documents.show', $document->id) }}">{{$document->title}}</a>
								            </td>
								            
								            <td class="has-text-centered">
								            	{{ date('M d, Y', strtotime($document->files->last()->created_at)) }}
								            </td>
								            
								            <td class="has-text-centered">
												<a href="/storage/documents/{{ $document->files->last()->filename }}" target="_blank">
													{{ $document->files->last()->filename }}
												</a>
								            </td>
										</tr>
									@endforeach{{-- $category->documents as $document --}}
							    </tbody>
							</table>
						@endslot
					@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
