@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
	        <article class="message">
	            <div class="message-header">
	                <p>Master List</p>
	        
		            <my-link class="is-primary is-rounded" href="{{ route('staffs.create') }}" title="Add New">
		            	<span class="fa fa-plus"></span>
		            </my-link>    
	            </div><!-- message-header -->
	        
	            <div class="message-body">
	            	@include ('shared.bulma-status')

					@component ('shared.bulma-check-content', ['data' => $staffs])
						@slot ('content')
			            	<table class="table is-fullwidth is-bordered is-hoverable">
			            	    <thead>
			            	        <tr class="has-background-grey-light">
			            	            <th class="has-text-centered">ID No.</th>
			            	            <th class="has-text-centered">Full Name</th>
			            	            <th class="has-text-centered">Job Title</th>
			            	            <th class="has-text-centered">Status</th>
			            	            <th class="has-text-centered">Dept</th>
			            	        </tr>
			            	    </thead>
			            	
			            	    <tbody>
									@foreach ($staffs as $staff)
										<tr>
											<td class="has-text-centered">
												<a href="{{ route('staffs.show', $staff->id) }}">{{ $staff->user['idNumber'] }}</a>
											</td>

											<td class="has-text-centered">{{ "$staff->firstName $staff->lastName" }}</td>
											<td class="has-text-centered">{{ $staff->jobTitle['titleName'] }}</td>
											<td class="has-text-centered">{{ $staff->employmentStat['statDesc'] }}</td>
											<td class="has-text-centered">{{ $staff->department['departmentName'] }}</td>
										</tr>
									@endforeach{{-- $staffs as $staff --}}
			            	    </tbody>
			            	</table>
						@endslot
					@endcomponent
	            </div><!-- message-body -->
	        </article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
