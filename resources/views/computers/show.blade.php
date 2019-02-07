@extends('shared.master')

@section('title', $computer->compName)

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h2>{{ $computer->compName }}</h2>
		    		
		    	</div>

		    	<div class="card-body">

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

					<h4 class="p-2">
						<span class="lead">Operating System:</span>
						{{ $computer->os }}
					</h4>				    	

					<h4 class="p-2">
						<span class="lead">Computer Status:</span>
						{{ $computer->status }}
					</h4>

					<h4 class="p-2">
						<span class="lead">Computer Information:</span>
						{{ $computer->information }}
					</h4>

			    </div>

		    	<div class="card-footer">

					@can ('update', $computer)
						<a href="/computer/{{ $computer->id }}/edit" class="btn btn-info">Edit</a>
					@endcan		    		
					<a href="/computers" class="btn btn-outline-secondary">Back</a>
		    	
		    	</div>

		    </div>

		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h4>Accounts
				    	@can ('create', App\ComputerAccount::class )
					    	<a class="btn btn-primary float-right" role="button"
								href="/computer/{{ $computer->id }}/account/create">Add</a>
				    	@endcan
				    </h4>
		    		
		    	</div>

		    	<div class="card-body">

					<table class="table border-bottom">
						<thead>
							<tr class="text-center">
								<th>User Name</th>
								<th>User Role</th>
								<th>Password</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($computer->accounts as $account)
								<tr class="text-center">
									<td>{{ $account->accountName }}</td>
									<td>{{ $account->type->type }}</td>
									<td>
										
									@if ( $account->type_id != 1 || Gate::allows('viewPassword', $computer) )
										{{ $account->password }}
									@else
										{!! preg_replace('/./', '&#9679;', $account->password) !!}
									@endif

									</td>
									<td>
										@can ('update', $account)
											<a class="btn btn-sm btn-outline-info" href="/computer-account/{{ $account->id }}/edit" role="button">Update</a>
										@endcan
									</td>

								</tr>
							@endforeach
						</tbody>
					</table>

			    </div>

		    </div>

		    <div class="card mt-3 border-secondary">

		    	<div class="card-header">
		    		
				    <h4>Softwares
				    	@can ('create', App\ComputerSoftware::class)
					    	<a class="btn btn-primary float-right" role="button"
								href="/computer/{{ $computer->id }}/software/create">Add</a>
				    	@endcan
				    </h4>
		    		
		    	</div>

		    	<div class="card-body">

						@foreach ($computer->softwares as $software)

							<ul class="list-group {{ !$loop->last ? 'mb-3' : '' }}">
								<li class="list-group-item">
									<h5>{{ ucfirst($software->software->softwareName) }}
										@can ('update', $software)
											<a class="btn btn-sm btn-outline-secondary float-right" role="button"
												href="/computer-software/{{ $software->id }}/edit">Update</a>
										@endcan
									</h5>
								</li>
								<li class="list-group-item">
									<div class="row">
									
										@foreach ($software->specs as $key => $spec)
								
											<div class="col-sm-3">
												<h5>
													<span class="lead">{{ ucfirst($key) }}:</span>
													@if ( preg_match('/password/i', $key) &&
														Gate::denies('viewPassword', $software))
														{!! preg_replace('/./', '&#9679;', $spec) !!}
													@else
														{{ $spec }}
													@endif
												</h5>
											</div>

										@endforeach

									</div>
								</li>
							</ul>

						@endforeach

			    </div>

		    </div>
				    
			<h3 class="m-4">Accessories</h3>

		    <div class="row mb-3">

		    	<div class="col-sm-6">
		    	
		    		<div class="card border-secondary">

		    			<div class="card-header">
		    				
		    				<h4>
		    					Mouse
								<a class="btn btn-primary float-right"
									href="/computer/{{ $computer->id }}/mouse"
									role="button"
								>Add</a>
		    				</h4>
		    				
		    			</div>
		    	
		    			<div class="card-body">
		    	
		    				<ul>
								@foreach ($computer->mouses as $mouse)
									<li class="pt-2">
										<h5>
											{{ $mouse->mouseName }}
											<form
												method="post"
												action="/computer/mouse/{{ $mouse->id }}/remove"
												class="float-right"
											>
												@csrf
												<button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
											</form>
										</h5>
									</li>
								@endforeach
							
							</ul>
		    			
		    			</div>
		    		
		    		</div>
		    	
		    	</div>
		    	
		    	<div class="col-sm-6">

		    		<div class="card border-secondary">

		    			<div class="card-header">
		    				
		    				<h4>
		    					Keyboard
								<a class="btn btn-primary float-right"
									href="/computer/{{ $computer->id }}/keyboard"
									role="button"
								>Add</a>
		    				</h4>
		    				
		    			</div>

		    			<div class="card-body">
		    				<ul>
								@foreach ($computer->keyboards as $keyboard)
									<li class="pt-2">
										<h5>
											{{ $keyboard->keyboardName }}
											<form
												method="post"
												action="/computer/keyboard/{{ $keyboard->id }}/remove"
												class="float-right"
											>
												@csrf
												<button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
											</form>
										</h5>
									</li>
								@endforeach
							</ul>
		    			</div>
		    		</div>
		    	</div>
		    </div>

					
    		<div class="row mb-3">

				<div class="col-sm-6">
				
					<div class="card border-secondary">

						<div class="card-header">
							
							<h4>
								Monitor
								<a class="btn btn-primary float-right"
									href="/computer/{{ $computer->id }}/monitor"
									role="button"
								>Add</a>
							</h4>
							
						</div>
				
						<div class="card-body">
				
							<ul>
								@foreach ($computer->monitors as $monitor)
									<li class="pt-2">
										<h5>
											{{ $monitor->monitorName }}
											<form
												method="post"
												action="/computer/monitor/{{ $monitor->id }}/remove"
												class="float-right"
											>
												@csrf
												<button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
											</form>
										</h5>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6">

		    		<div class="card border-secondary">

		    			<div class="card-header">
		    				
		    				<h4>
		    					Charger
								<a class="btn btn-primary float-right"
									href="/computer/{{ $computer->id }}/charger"
									role="button"
								>Add</a>
		    				</h4>
		    				
		    			</div>

		    			<div class="card-body">

		    				<ul>
								@foreach ($computer->chargers as $charger)
									<li class="pt-2">
										<h5>
											{{ $charger->chargerName }}
											<form
												method="post"
												action="/computer/charger/{{ $charger->id }}/remove"
												class="float-right"
											>
												@csrf
												<button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
											</form>
										</h5>
									</li>
								@endforeach
							</ul>
		    	
		    			</div>
		    	
		    		</div>
				
				</div>

	    	</div>

    	</div>

	</div>

@endsection