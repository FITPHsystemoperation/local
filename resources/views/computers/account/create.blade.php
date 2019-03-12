@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Add Account</p>

	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('computers.account.store', $computer->id) }}">
				@csrf

		        <section class="modal-card-body">
					<div class="field">
					    <label class="label" for="accountName">Account Name:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="accountName" name="accountName" placeholder="Account Name"
					            class="input {{ $errors->has('accountName') ? ' is-danger' : '' }}"
					            value="{{ old('accountName') }}" required autofocus>
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-user"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('accountName') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="type_id">Account Role:</label>
					
					    <div class="control">
							<div class="select is-fullwidth">
							    <select id="type_id" name="type_id"
						            class="input {{ $errors->has('type_id') ? ' is-danger' : '' }}" required>
									<option value="" disabled selected>Select Role</option>
									@foreach ($types as $type)
										<option value="{{ $type->id }}">{{ $type->type }}</option>
									@endforeach{{-- $types as $type --}}
							    </select>
							</div><!-- select -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('type_id') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="password">Password:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="password" name="password" placeholder="Password"
					            class="input {{ $errors->has('password') ? ' is-danger' : '' }}"
					            value="{{ old('password') }}" required>
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-lock"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('password') }}</p>
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

		            <my-link  href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
