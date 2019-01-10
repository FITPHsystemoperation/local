@extends('shared.master')

@section('title', $computer->compName)

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3">

		    	<div class="card-body">
				    
				    <h1 class="card-title mt-2">{{ $computer->compName }}</h1>

				    <hr>

					@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif

					<h4 class="p-2">
						<span class="lead">User Name:</span>
						{{ $computer->userName }}
					</h4>				    	

					<h4 class="p-2">
						<span class="lead">User Password:</span>
						{{ $computer->userPass }}
					</h4>

					<h4 class="p-2">
						<span class="lead">Admin Password:</span>
						{{ $computer->adminPass }}
					</h4>

					<h4 class="p-2">
						<span class="lead">Computer Specs:</span>
					</h4>
					<ul>
						<li>{{ $computer->specs }}</li>
					</ul>
				    
					<h4 class="p-2">
						<span class="lead">With WillsBuster:</span>
						{!! $computer->withWbuster ? '&#10004;' : '&#10060;' !!}
					</h4>

					<h4 class="p-2">
						<span class="lead">With Skysea:</span>
						{!! $computer->withSkysea ? '&#10004;' : '&#10060;' !!}
					</h4>

					<hr>

					<a href="{{ action('ComputersController@edit', $computer->id) }}" class="btn btn-info">Edit</a>
					<a href="{{ action('ComputersController@index') }}" class="btn btn-secondary">Back</a>

		    	</div>

		    </div>

		    <div class="card mt-3">
		    	
		    	<div class="card-body">
				    
				    <h1 class="card-title">Accessories</h1>

				    <div class="row mt-3">

				    	<div class="col-sm-6">
				    	
				    		<div class="card">
				    	
				    			<div class="card-body">
				    	
				    				<h4 class="card-title">
				    					Mouse
										<a class="btn btn-primary float-right"
											href="{{ action('ComputerMouseController@index', $computer->id) }}"
											role="button"
										>Add</a>
				    			
				    				</h4>
				    			
				    				<hr>
				    			
				    				<ul>
										@foreach ($computer->mouse as $mouse)
											<li class="pt-2">
												<h5>
													{{ $mouse->mouseName }}
													<form
														method="post"
														action="/computer/{{ $computer->id }}/mouse/{{ $mouse->id }}/remove"
														class="float-right"
													>
														@csrf
														<button type="submit" class="btn btn-danger btn-sm">Remove</button>
													</form>
												</h5>
											</li>
										@endforeach
									
									</ul>
				    			
				    			</div>
				    		
				    		</div>
				    	
				    	</div>
				    	
				    	<div class="col-sm-6">
				    		<div class="card">
				    			<div class="card-body">
				    				<h4 class="card-title">
				    					Keyboard
										<a class="btn btn-primary float-right"
											href="{{ action('ComputerKeyboardController@index', $computer->id) }}"
											role="button"
										>Add</a>
				    				</h4>
				    				<hr>
				    				<ul>
										@foreach ($computer->keyboard as $keyboard)
											<li class="pt-2">
												<h5>
													{{ $keyboard->keyboardName }}
													<form
														method="post"
														action="/computer/{{ $computer->id }}/keyboard/{{ $keyboard->id }}/remove"
														class="float-right"
													>
														@csrf
														<button type="submit" class="btn btn-danger btn-sm">Remove</button>
													</form>
												</h5>
											</li>
										@endforeach
									</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>

					
		    		<div class="row mt-3">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">
										Monitor
										<a class="btn btn-primary float-right"
											href="{{ action('ComputerMonitorController@index', $computer->id) }}"
											role="button"
										>Add</a>
									</h4>
									<hr>
									<ul>
										@foreach ($computer->monitor as $monitor)
											<li class="pt-2">
												<h5>
													{{ $monitor->monitorName }}
													<form
														method="post"
														action="/computer/{{ $computer->id }}/monitor/{{ $monitor->id }}/remove"
														class="float-right"
													>
														@csrf
														<button type="submit" class="btn btn-danger btn-sm">Remove</button>
													</form>
												</h5>
											</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
				    		<div class="card">
				    			<div class="card-body">
				    				<h4 class="card-title">
				    					Charger
										<a class="btn btn-primary float-right"
											href="{{ action('ComputerChargerController@index', $computer->id) }}"
											role="button"
										>Add</a>
				    				</h4>
				    				<hr>
				    				<ul>
										@foreach ($computer->charger as $charger)
											<li class="pt-2">
												<h5>
													{{ $charger->chargerName }}
													<form
														method="post"
														action="/computer/{{ $computer->id }}/charger/{{ $charger->id }}/remove"
														class="float-right"
													>
														@csrf
														<button type="submit" class="btn btn-danger btn-sm">Remove</button>
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

	</div>

@endsection