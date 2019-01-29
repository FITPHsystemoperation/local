@extends('shared.master')

@section('title', 'New Department Record')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
			    
			    	<h2>New Software</h2>
	    			
	    		</div>

		    	<div class="card-body">
				    
				    @foreach ($errors->all() as $error)
					    <p class="alert alert-danger">{{ $error }}</p>
					@endforeach
		    		
		    		<form method="post" action="/softwares/create">

		    			@csrf

		    			<fieldset class="form-group">
		    				<label for="softwareName">Software Name</label>
		    				<input type="text" class="form-control" id="softwareName" name="softwareName" placeholder="Software Name" value="{{ old('softwareName') }}" required autofocus>
		    			</fieldset>

		    			<fieldset class="form-group">
		    				<label for="specList">Spec List </label>
		    				<span class="text-danger float-right">
                                <strong>*Separate each item using space.</strong>
                            </span>
		    				<input type="text" class="form-control" id="specList" name="specList" placeholder="Ex: (Version Password)" value="{{ old('specList') }}">
		    			</fieldset>

		    			<button type="submit" class="btn btn-primary">Save</button>

		    			<a class="btn btn-outline-secondary" href="/softwares" role="button">Back</a>
		    			
		    		</form>

		    	</div>

		    </div>

		</div>

	</div>

@endsection