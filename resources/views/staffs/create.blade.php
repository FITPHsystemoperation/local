@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">New Staff</p>
	            <a class="delete" href="{{ route('staffs.index') }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('staffs.store') }}">
				@csrf

		        <section class="modal-card-body">
		            <div class="field">
		                <label class="label" for="idNumber">I.D. No:</label>
		            
		                <div class="control has-icons-right">
		                    <input type="text" id="idNumber" name="idNumber" placeholder="FIT xxxx"
		                        class="input {{ $errors->has('idNumber') ? ' is-danger' : '' }}"
		                        value="{{ old('idNumber') }}" autofocus required>
		            
		                    <span class="icon is-small is-right">
		                        <i class="fas fa-id-card"></i>
		                    </span><!-- icon -->
		                </div><!-- control -->
		            
		                <p class="help is-danger">{{ $errors->first('idNumber') }}</p>
		            </div><!-- field -->

		            <div class="field">
		                <label class="label" for="firstName">First Name:</label>
		            
		                <div class="control">
		                    <input type="text" id="firstName" name="firstName" placeholder="First Name"
		                        class="input {{ $errors->has('firstName') ? ' is-danger' : '' }}"
		                        value="{{ old('firstName') }}" required>
		                </div><!-- control -->
		            
		                <p class="help is-danger">{{ $errors->first('firstName') }}</p>
		            </div><!-- field -->
		
					<div class="field">
					    <label class="label" for="middleName">Middle Name:</label>
					
					    <div class="control">
					        <input type="text" id="middleName" name="middleName" placeholder="Middle Name"
					            class="input" value="{{ old('middleName') }}">
					    </div><!-- control -->
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="lastName">Last Name:</label>
					
					    <div class="control">
					        <input type="text" id="lastName" name="lastName" placeholder="Last Name"
					            class="input {{ $errors->has('lastName') ? ' is-danger' : '' }}"
					            value="{{ old('lastName') }}" required>
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('lastName') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="nickName">Nick Name:</label>
					
					    <div class="control">
					        <input type="text" id="nickName" name="nickName" placeholder="Nick Name"
					            class="input {{ $errors->has('nickName') ? ' is-danger' : '' }}"
					            value="{{ old('nickName') }}" required>
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('nickName') }}</p>
					</div><!-- field -->

					<div class="field">
						<label class="label">Gender:</label>

					    <div class="control">
							<label class="radio">
					            <input type="radio" name="gender" value="m" checked> Male
					        </label>
					        
					        <label class="radio">
					            <input type="radio" name="gender" value="f"> Female
					        </label>										        
					    </div><!-- control -->
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

		            <my-link href="{{ route('staffs.index') }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
