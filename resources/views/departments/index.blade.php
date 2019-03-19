@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>Department List</p>

					<my-link class="is-primary is-rounded" href="{{ route('departments.create') }}" title="Add New">
						<span class="fa fa-plus"></span>
					</my-link>	        
	            </div><!-- message-header -->
	        
	            <div class="message-body">
	            	@include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $departments])
						@slot ('content')
			                <table class="table is-fullwidth is-bordered is-hoverable">
			                    <thead>
			                        <tr class="has-background-grey-light">
			                            <th class="has-text-centered">Department</th>
			                            <th class="has-text-centered">Members</th>
			                        </tr>
			                    </thead>
			                
			                    <tbody>
									@foreach ($departments as $department)
										<tr class="text-center">
											<td class="has-text-centered">
												<a href="{{ route('departments.show', $department->id) }}">
													{{ $department->departmentName }}
												</a>
											</td>

											<td class="has-text-centered">
												<strong class="has-text-danger">{{ $department->staffs->count() }}</strong> member/s
											</td>
										</tr>
									@endforeach{{-- $departments as $department --}}
			                    </tbody>
			                </table>
		               	@endslot
	               	@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
