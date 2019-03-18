@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Charger</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
	        <section class="modal-card-body">
				@include ('shared.bulma-status')

	        	<div class="box">
					<form method="post" @submit="submit" action="{{ route('computers.charger.attach', $computer->id) }}">
						@csrf
						@method ('patch')

					    <label class="label" for="charger">Select Charger:</label>
						
						<div class="field is-grouped">
						    <div class="control is-expanded">
								<div class="select is-fullwidth {{ $errors->has('charger') ? 'is-danger': '' }}">
								    <select id="charger" name="charger" autofocus required>
										@foreach ($chargers as $charger)
											<option value="{{ $charger->id }}" {{ $charger->computer ? 'disabled' : '' }}>
												{{ $charger->chargerName }}
											</option>
										@endforeach{{-- $chargers as $charger --}}
								    </select>
								</div><!-- select -->
						    </div><!-- control -->

						    <div class="control">
						    	<button type="submit" class="button is-link" :class="{ 'is-loading': isLoading }">Attach</button>
						    </div>
						</div><!-- field -->
						
					    <p class="help is-danger">{{ $errors->first('charger') }}</p>
	        		</form>
	        	</div>{{-- box --}}

	        	<div class="box">
					<form method="post" @submit="submit" action="{{ route('computers.charger.store', $computer->id) }}">
						@csrf

	        		    <label class="label" for="chargerName">Add New Charger:</label>
		        		
		        		<div class="field is-grouped">
		        		    <div class="control is-expanded has-icons-right">
		        		        <input type="text" id="chargerName" name="chargerName" placeholder="Charger Name"
		        		            class="input {{ $errors->has('chargerName') ? ' is-danger' : '' }}"
		        		            value="{{ old('chargerName') }}" required>
		        		
		        		        <span class="icon is-small is-right">
		        		            <i class="fas fa-plug"></i>
		        		        </span><!-- icon -->
		        		    </div><!-- control -->

		        		    <div class="field">
		        		    	<button type="submit" class="button is-info" :class="{ 'is-loading': isLoading }">Record</button>
		        		    </div>{{-- field --}}
		        		</div><!-- field -->
		        		
	        		    <p class="help is-danger">{{ $errors->first('chargerName') }}</p>
	        		</form>
	        	</div>{{-- box --}}
	        </section><!-- modal-card-body -->
	        
	        <footer class="modal-card-foot">
	            <my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
	        </footer><!-- modal-card-foot -->
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
