@extends('shared.layout')

@section('content')
	@component ('staffs.components.input', [
		'staff' => $staff,
		'form' => [
			'title' => 'Update Personal Information',
			'post' => 'staffs.personal.update',		
			'prev_route' => $staff->isCompleted ? 'staffs.show' : 'staffs.account.edit',
		]
	])
		<div class="field">
		    <label class="label" for="birthday">Birth Date:</label>
		
		    <div class="control">
		        <input type="date" id="birthday" name="birthday" placeholder="Birth Dsate"
		            class="input {{ $errors->has('birthday') ? ' is-danger' : '' }}"
		            value="{{ $staff->birthday }}" required autofocus>
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('birthday') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="civilStatus">Civil Status:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="civilStatus" name="civilStatus" placeholder="Civil Status"
		            class="input {{ $errors->has('civilStatus') ? ' is-danger' : '' }}"
		            value="{{ $staff->civilStatus }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-users"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('civilStatus') }}</p>
		</div><!-- field -->

		<div class="field">
			<label class="label">Gender:</label>

		    <div class="control">
				<label class="radio">
		            <input type="radio" name="gender" value="m" {{ $staff->gender === 'm' ? 'checked' : '' }}> Male
		        </label>
		        
		        <label class="radio">
		            <input type="radio" name="gender" value="f" {{ $staff->gender === 'f' ? 'checked' : '' }}> Female
		        </label>										        
		    </div><!-- control -->
		</div><!-- field -->
	@endcomponent
@endsection
