@extends('shared.layout')

@section('content')
	@component ('staffs.components.input', [
		'staff' => $staff,
		'form' => [
			'title' => 'Update Emergency Contact Information',
			'post' => 'staffs.emergency.update',		
			'prev_route' => $staff->isCompleted ? 'staffs.show' : 'staffs.contact.edit',
		]
	])
		<div class="field">
		    <label class="label" for="emergencyPerson">Contact Person:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="emergencyPerson" name="emergencyPerson" placeholder="Emergency Contact Person"
		            class="input {{ $errors->has('emergencyPerson') ? ' is-danger' : '' }}"
		            value="{{ $staff->emergencyPerson }}" required autofocus>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-user"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('emergencyPerson') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="emergencyNo">Contact No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="emergencyNo" name="emergencyNo" placeholder="Contact Number"
		            class="input {{ $errors->has('emergencyNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->emergencyNo }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-phone"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('emergencyNo') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="emergencyRelation">Relationship:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="emergencyRelation" name="emergencyRelation" placeholder="Relationship"
		            class="input {{ $errors->has('emergencyRelation') ? ' is-danger' : '' }}"
		            value="{{ $staff->emergencyRelation }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-user-friends"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('emergencyRelation') }}</p>
		</div><!-- field -->
	@endcomponent
@endsection
