@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">New Computer Record</p>

	            <a class="delete" aria-label="close" href="{{ route('computers.index') }}"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" action="{{ route('computers.store') }}" @submit="submit">
				@csrf

		        <section class="modal-card-body">
					<div class="field">
					    <label class="label" for="compName">Computer Name:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="compName" name="compName" placeholder="Computer Name"
					            class="input {{ $errors->has('compName') ? ' is-danger' : '' }}"
					            value="{{ old('compName') }}" required autofocus="">
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-desktop"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('compName') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="os">Operating System:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="os" name="os" placeholder="Operating System"
					            class="input" value="{{ old('os') }}">
					
					        <span class="icon is-small is-right">
					            <i class="fab fa-windows"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="status">Computer Status:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="status" name="status" placeholder="Computer Status"
					            class="input" value="{{ old('status') }}">
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-battery-half"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="information">Information:</label>
					
					    <div class="control has-icons-left has-icons-right">
					    	<textarea id="information" name="information" rows="3" placeholder="information" class="textarea">{{ old('information') }}</textarea>
					    </div><!-- control -->
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

		            <my-link href="{{ route('computers.index') }}">Go back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
