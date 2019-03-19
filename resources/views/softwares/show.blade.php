@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>{{ ucwords($software->softwareName) }}</p>
	        		
	        		<div class="buttons">
	        			<my-link class="is-warning is-rounded" lined="true" href="{{ route('softwares.edit', $software->id) }}" title="Update">
	        				<span class="fa fa-edit"></span>
	        			</my-link>
	        				
						<my-link class="is-success is-rounded" lined="true" href="{{ route('softwares.index') }}" title="Go Back">
							<span class="fa fa-arrow-left"></span>
						</my-link>
	        		</div>
	            </div><!-- message-header -->
	        
	            <div class="message-body">
	                @include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $software->computers])
						@slot ('content')
							<table class="table is-fullwidth is-bordered is-hoverable">
							    <thead>
							        <tr class="has-background-grey-light">
							            <th class="has-text-centered">Computer</th>
									
										@foreach ($software->specList as $spec)
								            <th class="has-text-centered">{{ ucfirst($spec) }}</th>
										@endforeach
							        </tr>
							    </thead>
							
							    <tbody>
									@foreach ($software->computers as $computer)
								        <tr>
								            <td class="has-text-centered">
												<a href="{{ route('computers.show', $computer->computer->id) }}">
													{{ $computer->computer->compName }}
												</a>
								            </td>

											@foreach ($software->specList as $spec)
												<td class="has-text-centered">
													{{array_key_exists($spec, $computer->specs) ? $computer->specs[$spec] : '' }}
												</td>
											@endforeach{{-- $software->specList as $spec --}}
								        </tr>
									@endforeach{{-- $software->computers as $computer --}}
							    </tbody>
							</table>
						@endslot
					@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
