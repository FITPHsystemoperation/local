@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>{{ $department->departmentName }}</p>
	        
					<div class="buttons">
						<my-link class="is-warning is-rounded" lined="true" title="Update"
							href="{{ route('departments.edit', $department->id) }}">
							<span class="fa fa-edit"></span>
						</my-link>

						<my-link class="is-success is-rounded" lined="true" href="{{ route('departments.index') }}" title="Go Back">
							<span class="fa fa-arrow-left"></span>
						</my-link>
					</div>
	            </div><!-- message-header -->
	        
	            <div class="message-body">
	            	@include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $department->staffs])
						@slot ('content')
							<table class="table is-fullwidth is-bordered is-hoverable">
							    <thead>
							        <tr class="has-background-grey-light">
							            <th class="has-text-centered">I.D No.</th>
							            <th class="has-text-centered">Full Name</th>
							            <th class="has-text-centered">Job Title</th>
							        </tr>
							    </thead>
							
							    <tbody>
									@foreach ($department->staffs as $staff)
								        <tr>
											<td class="has-text-centered">{{ $staff->user['idNumber'] }}</td>
											
											<td class="has-text-centered">{{ "$staff->firstName $staff->lastName" }}</td>
											
											<td class="has-text-centered">{{ $staff->jobTitle['titleName'] }}</td>
										</tr>
									@endforeach{{-- ($department->staffs as $staff) --}}
							    </tbody>
							</table>
						@endslot
					@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
