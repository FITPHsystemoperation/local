@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>Software Management</p>
	        
					<my-link class="is-primary is-rounded" href="{{ route('softwares.create') }}" title="Add New">
						<span class="fa fa-plus"></span>
					</my-link>
	            </div><!-- message-header -->
	        
	            <div class="message-body">
					@include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $softwares ])
						@slot('content')
							<table class="table is-fullwidth is-bordered is-hoverable">
							    <thead>
							        <tr class="has-background-grey-light">
							            <th class="has-text-centered">Softwares</th>
							            <th class="has-text-centered">Installed</th>
							        </tr>
							    </thead>
							
							    <tbody>
									@foreach ($softwares as $software)
								        <tr>
											<td class="has-text-centered">
												<a href="{{ route('softwares.show', $software->id) }}">{{ $software->softwareName }}</a>
											</td>

											<td class="has-text-centered">
												<strong class="has-text-danger">{{ $software->computers->count() }}</strong> computer/s
											</td>
										</tr>
									@endforeach{{-- $softwares as $software --}}
							    </tbody>
							</table>
						@endslot
					@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
