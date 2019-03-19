@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">New Department Record</p>
	            <a class="delete" href="{{ route('departments.index') }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('departments.store') }}">
				@csrf

		        <section class="modal-card-body">
		            <div class="field">
		                <label class="label" for="departmentName">Department Name:</label>
		            
		                <div class="control has-icons-right">
		                    <input type="text" id="departmentName" name="departmentName" placeholder="Department Name"
		                        class="input {{ $errors->has('departmentName') ? ' is-danger' : '' }}"
		                        value="{{ old('departmentName') }}" autofocus required>
		            
		                    <span class="icon is-small is-right">
		                        <i class="fas fa-users"></i>
		                    </span><!-- icon -->
		                </div><!-- control -->
		            
		                <p class="help is-danger">{{ $errors->first('departmentName') }}</p>
		            </div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record	</button>

		            <my-link href="{{ route('departments.index') }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
