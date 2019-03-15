@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Keyboard</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
	        <section class="modal-card-body">
				@include ('shared.bulma-status')

				<div class="box">
					<form method="post" @submit="submit" action="{{ route('computers.keyboard.attach', $computer->id) }}">
						@csrf
						@method ('patch')

					    <label class="label" for="keyboard">Select Keyboard:</label>
						
						<div class="field is-grouped">
						    <div class="control is-expanded">
								<div class="select is-fullwidth  {{ $errors->has('keyboard') ? ' is-danger' : '' }}">
								    <select id="keyboard" name="keyboard" autofocus required>
								        @foreach ($keyboards as $keyboard)
											<option value="{{ $keyboard->id }}" {{ $keyboard->computer ? 'disabled' : '' }}>
												{{ $keyboard->keyboardName }}
											</option>
										@endforeach{{-- $keyboards as $keyboard --}}
								    </select>
								</div><!-- select -->
						    </div><!-- control -->

						    <div class="control">
						    	<button class="button is-link" :class="{ 'is-loading': isLoading }">Attach</button>
						    </div>{{-- control --}}
						</div><!-- field -->
						
					    <p class="help is-danger">{{ $errors->first('keyboard') }}</p>
					</form>
				</div>{{-- box --}}

	        	<div class="box">
					<form method="post" @submit="submit" action="{{ route('computers.keyboard.store', $computer->id) }}">
						@csrf

        			    <label class="label" for="keyboardName">Add New Keyboard:</label>
	        			
	        			<div class="field is-grouped">
	        			    <div class="control is-expanded has-icons-right">
	        			        <input type="text" id="keyboardName" name="keyboardName" placeholder="Keyboard Name"
	        			            class="input {{ $errors->has('keyboardName') ? ' is-danger' : '' }}"
	        			            value="{{ old('keyboardName') }}" required>
	        			
	        			        <span class="icon is-small is-right">
	        			            <i class="fas fa-keyboard"></i>
	        			        </span><!-- icon -->
	        			    </div><!-- control -->

	        			    <div class="control">
	        			    	<button type="submit" class="button is-info" :class="{ 'is-loading': isLoading }">Record</button>
	        			    </div>{{-- control --}}
	        			</div><!-- field -->
	        			
        			    <p class="help is-danger">{{ $errors->first('keyboardName') }}</p>
					</form>
	        	</div>{{-- box --}}
	        </section><!-- modal-card-body -->
	        
	        <footer class="modal-card-foot">
	        	<my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
	        </footer><!-- modal-card-foot -->
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
