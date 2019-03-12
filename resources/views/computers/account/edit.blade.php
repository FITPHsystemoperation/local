@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Edit Account</p>

	            <a class="delete" href="{{ route('computers.show', $account->computer_id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('computers.account.update', [$account->computer_id, $account->id]) }}">
				@csrf
				@method ('patch')

		        <section class="modal-card-body">
					<div class="field">
					    <label class="label" for="accountName">Account Name:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="accountName" name="accountName" placeholder="Account Name"
					            class="input {{ $errors->has('accountName') ? ' is-danger' : '' }}"
					            value="{{ $account->accountName }}" required autofocus>
					
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
									@foreach ($types as $type)
										<option value="{{ $type->id }}" {{ $account->type_id === $type->id ? 'selected' : '' }}>
											{{ $type->type }}
										</option>
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
					            value="{{ $account->password }}" required>
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-lock"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('password') }}</p>
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-info" :class="{ 'is-loading': isLoading }">Update Record</button>

					<button class="button is-danger" :class="{ 'is-loading': isLoading }" @click="submit"
						onclick="event.preventDefault(); document.getElementById('delete_form').submit();">
						Delete Record
					</button>

		            <my-link href="{{ route('computers.show', $account->computer_id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->

		<form id="delete_form" method="post"
			action="{{ route('computers.account.destroy', [$account->computer_id, $account->id]) }}">
			@csrf
			@method ('delete')
		</form>
	</div><!-- modal -->
@endsection
