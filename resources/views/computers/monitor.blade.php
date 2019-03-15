@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Monitor</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
	        <section class="modal-card-body">
				@include ('shared.bulma-status')

	        	<div class="box">
					<form method="post" @submit="submit" action="{{ route('computers.monitor.attach', $computer->id) }}">
						@csrf
						@method ('patch')

					    <label class="label" for="monitor">Select Monitor:</label>
						
						<div class="field is-grouped">
						    <div class="control is-expanded">
								<div class="select is-fullwidth {{ $errors->has('monitor') ? 'is-danger': '' }}">
								    <select id="monitor" name="monitor" autofocus>
										@foreach ($monitors as $monitor)
											<option value="{{ $monitor->id }}" {{ $monitor->computer ? 'disabled' : '' }}>
												{{ $monitor->monitorName }}
											</option>
										@endforeach{{-- $monitors as $monitor --}}
								    </select>
								</div><!-- select -->
						    </div><!-- control -->

						    <div class="control">
						    	<button type="submit" class="button is-link" :class="{ 'is-loading': isLoading }">Attach</button>
						    </div>{{-- control --}}
						</div><!-- field -->
						
					    <p class="help is-danger">{{ $errors->first('monitor') }}</p>
	        		</form>
	        	</div>{{-- box --}}

	        	<div class="box">
					<form method="post" @submit="submit" action="{{ route('computers.monitor.store', $computer->id) }}">
						@csrf

	        		    <label class="label" for="monitorName">Add New Monitor:</label>
		        		
		        		<div class="field is-grouped">
		        		    <div class="control is-expanded has-icons-right">
		        		        <input type="text" id="monitorName" name="monitorName" placeholder="Monitor Name"
		        		            class="input {{ $errors->has('monitorName') ? ' is-danger' : '' }}"
		        		            value="{{ old('monitorName') }}">
		        		
		        		        <span class="icon is-small is-right">
		        		            <i class="fas fa-desktop"></i>
		        		        </span><!-- icon -->
		        		    </div><!-- control -->

		        		    <div class="control">
		        		    	<button type="submit" class="button is-info" :class="{ 'is-loading': isLoading }">Record</button>
		        		    </div>{{-- control --}}
		        		</div><!-- field -->
		        		
	        		    <p class="help is-danger">{{ $errors->first('monitorName') }}</p>
	        		</form>
	        	</div>{{-- box --}}
	        </section><!-- modal-card-body -->
	        
	        <footer class="modal-card-foot">
	        	<my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
	        </footer><!-- modal-card-foot -->
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
