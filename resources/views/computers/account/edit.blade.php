@extends('shared.master')

@section('title', 'Edit Account')

@section('content')

<div class="row justify-content-center">

	<div class="col-sm-8">
		
		<div class="card mt-3 border-secondary">
			
			<div class="card-header">

			    <h3>Edit Account</h3>

			</div>{{-- card-header --}}

			<div class="card-body">

				@foreach ($errors->all() as $error)
				    <p class="alert alert-danger">{{ $error }}</p>
				@endforeach

				<form method="post" action="/computer-account/{{ $account->id }}/edit">

					@csrf

					<fieldset class="form-group">
	    				<label for="accountName">Account Name</label>
	    				<input type="text" class="form-control" id="accountName" name="accountName" placeholder="Account Name" value="{{ $account->accountName }}" required autofocus>
	    			</fieldset>

	    			<fieldset class="form-group">
	    				<label for="accountRole">Account Role</label>
	    				<input type="text" class="form-control" id="accountRole" name="accountRole" placeholder="Account Role" value="{{ $account->accountRole }}" required>
	    			</fieldset>

	    			<fieldset class="form-group">
	    				<label for="password">Password</label>
	    				<input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ $account->password }}" required>
	    			</fieldset>
					
	    			<hr>

	    			<button type="submit" class="btn btn-primary">Update</button>

	    			<a class="btn btn-danger" href="/computer-account/{{ $account->id }}/delete" role="button"
	    				onclick="event.preventDefault(); document.getElementById('delete_form').submit();" 
	    			>Remove</a>

	    			<a class="btn btn-outline-secondary" href="/computer/{{ $account->computer_id }}" role="button">Back</a>

	
				</form>
				
    			<form id="delete_form" method="post" action="/computer-account/{{ $account->id }}/delete" class="float-left">
					@csrf
				</form>

			</div>{{-- card-body --}}

		</div>{{-- card --}}

	</div>{{-- col-sm-8 --}}
	
</div>{{-- row --}}

@endsection
