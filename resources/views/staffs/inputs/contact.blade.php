@extends('shared.layout')

@section('content')
	@component ('staffs.components.input', [
		'staff' => $staff,
		'form' => [
			'title' => 'Update Contact Information',
			'post' => 'staffs.contact.update',		
			'prev_route' => $staff->isCompleted ? 'staffs.show' : 'staffs.work.edit',
		]
	])
		<div class="field">
		    <label class="label" for="contactNo">Contact No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="contactNo" name="contactNo" placeholder="Contact Number"
		            class="input {{ $errors->has('contactNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->contactNo }}" required autofocus>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-phone"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('contactNo') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="emailAddress">Email Address:</label>
		
		    <div class="control has-icons-right">
		        <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address"
		            class="input {{ $errors->has('emailAddress') ? ' is-danger' : '' }}"
		            value="{{ $staff->emailAddress }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-at"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('emailAddress') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="permanentAddress">Permanent Address:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="permanentAddress" name="permanentAddress" placeholder="Permanent Address"
		            class="input {{ $errors->has('permanentAddress') ? ' is-danger' : '' }}"
		            value="{{ $staff->permanentAddress }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-map-marker-alt"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('permanentAddress') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="presentAddress">Present Address:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="presentAddress" name="presentAddress" placeholder="Present Address"
		            class="input {{ $errors->has('presentAddress') ? ' is-danger' : '' }}"
		            value="{{ $staff->presentAddress }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-map-marker-alt"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('presentAddress') }}</p>
		</div><!-- field -->

	@endcomponent
@endsection
