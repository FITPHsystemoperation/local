@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Attach Mouse</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
				
	        <section class="modal-card-body">
				@include ('shared.bulma-status')

	        	<div class="box">
					<form method="post" @submit="submit" id="attach-form" action="{{ route('computers.mouse.attach', $computer->id) }}">
						@csrf
						@method ('patch')

					    <label class="label" for="mouse">Select Mouse:</label>
						
						<div class="field has-addons">
						    <div class="control is-expanded">
						    	<div class="select is-fullwidth {{ $errors->has('mouse') ? ' is-danger' : '' }}">
						    	    <select id="mouse" name="mouse" autofocus required>
						    	        @foreach ($mouses as $mouse)
											<option value="{{ $mouse->id }}" {{ $mouse->computer ? 'disabled' : '' }}>
												{{ $mouse->mouseName }}
											</option>
										@endforeach{{-- $mouses as $mouse --}}
						    	    </select>
						    	</div><!-- select -->
						    </div><!-- control -->

					    	<div class="control">
						    	<button type="submit" class="button is-link" :class="{ 'is-loading': isLoading }">Attach</button>
					    	</div>{{-- control --}}
						</div><!-- field -->

					    <p class="help is-danger">{{ $errors->first('mouse') }}</p>
					</form>
	        	</div>{{-- box --}}

				<div class="box">
				    <label class="label" for="mouseName">Add New Mouse:</label>

					<form method="post" @submit="submit" action="{{ route('computers.mouse.store', $computer->id) }}">
						@csrf

						<div class="field has-addons">
						    <div class="control is-expanded has-icons-right">
						        <input type="text" id="mouseName" name="mouseName" placeholder="Mouse Name"
						            class="input {{ $errors->has('mouseName') ? ' is-danger' : '' }}"
						            value="{{ old('mouseName') }}" required>
						
						        <span class="icon is-small is-right">
						            <i class="fas fa-mouse-pointer"></i>
						        </span><!-- icon -->
						    </div><!-- control -->

						    <div class="control">
						    	<button class="button is-info" :class="{ 'is-loading': isLoading }">Record</button>
						    </div>{{-- control --}}
						</div><!-- field -->

					    <p class="help is-danger">{{ $errors->first('mouseName') }}</p>
					</form>
				</div>{{-- box --}}
	        </section><!-- modal-card-body -->
	        
	        <footer class="modal-card-foot">
	            <my-link class="button" href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
	        </footer><!-- modal-card-foot -->
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
