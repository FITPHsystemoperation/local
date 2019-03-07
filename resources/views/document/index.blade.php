@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>Documents</p>
	        
					<a class="button is-primary is-rounded" href="{{ route('documents.create') }}" title="Add new">
						<span class="fas fa-plus"></span>
					</a>
	            </div><!-- message-header -->
	        
	            <div class="message-body">
	            	@include ('shared.bulma-status')

	            	@component ('shared.bulma-check-content', ['data' => $documents])
                        @slot ('content')
                        	<table class="table is-fullwidth is-bordered is-hoverable">
                        	    <thead>
                        	        <tr class="has-background-grey-light">
                        	            <th class="has-text-centered">Title</th>
                        	            <th class="has-text-centered">Category</th>
                        	            <th class="has-text-centered">Uploaded Date</th>
                        	            <th class="has-text-centered">File</th>
                        	        </tr>
                        	    </thead>
                        	
                        	    <tbody>
                        	    	@foreach ($documents as $document)
	                        	        <tr>
	                        	            <td class="has-text-centered has-text-link">
												<a href="{{ route('documents.show', $document->id) }}">{{$document->title}}</a>
	                        	            </td>

	                        	            <td class="has-text-centered">{{ $document->category->categoryName }}</td>

	                        	            <td class="has-text-centered">
	                        	            	{{ date('M d, Y', strtotime($document->files->last()->created_at)) }}
	                        	            </td>

	                        	            <td class="has-text-centered has-text-link">
												<a href="/storage/documents/{{ $document->files->last()->filename }}" target="_blank">
													{{ $document->files->last()->filename }}
												</a>
	                        	            </td>
	                        	        </tr>
                        	    	@endforeach
                        	    </tbody>
                        	</table>
                        @endslot
                    @endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->

@endsection

