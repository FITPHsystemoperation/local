@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">New Software</p>
	            <a class="delete" href="{{ route('softwares.index') }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('softwares.store') }}">
				@csrf

		        <section class="modal-card-body">
		        	<div class="field">
		        	        <label class="label" for="softwareName">Software Name:</label>
		        	    
		        	        <div class="control has-icons-right">
		        	            <input type="text" id="softwareName" name="softwareName" placeholder="Software Name"
		        	                class="input {{ $errors->has('softwareName') ? ' is-danger' : '' }}"
		        	                value="{{ old('softwareName') }}" autofocus>
		        	    
		        	            <span class="icon is-small is-right">
		        	                <i class="fas fa-compact-disc"></i>
		        	            </span><!-- icon -->
		        	        </div><!-- control -->
		        	    
		        	        <p class="help is-danger">{{ $errors->first('softwareName') }}</p>
		        	    </div><!-- field -->    

		        	    <div class="field">
		        	        <label class="label" for="specList">Spec List:</label>
		        	    
		        	        <div class="control has-icons-right">
		        	            <input type="text" id="specList" name="specList" placeholder="Ex: (Version Password)"
		        	                class="input" value="{{ old('specList') }}">
		        	    
		        	            <span class="icon is-small is-right">
		        	                <i class="fas fa-list"></i>
		        	            </span><!-- icon -->
		        	        </div><!-- control -->
		        	    
		        	        <p class="help is-info">Separate each specs using Spacebar</p>
		        	    </div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Record</button>

		            <my-link href="{{ route('softwares.index') }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
