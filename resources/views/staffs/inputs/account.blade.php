@extends('shared.layout')

@section('content')
	@component ('staffs.components.input', [
		'staff' => $staff,
		'form' => [
			'title' => 'Update Accounts Information',
			'post' => 'staffs.account.update',		
			'prev_route' => $staff->isCompleted ? 'staffs.show' : 'staffs.emergency.edit',
		]
	])
		<div class="field">
		    <label class="label" for="birNo">B.I.R. No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="birNo" name="birNo" placeholder="B.I.R. Number"
		            class="input {{ $errors->has('birNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->birNo }}" required autofocus>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-passport"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('birNo') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="sssNo">S.S.S. No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="sssNo" name="sssNo" placeholder="S.S.S. Number"
		            class="input {{ $errors->has('sssNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->sssNo }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-passport"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('sssNo') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="pagibigNo">PagIBIG No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="pagibigNo" name="pagibigNo" placeholder="PagIBIG Number"
		            class="input {{ $errors->has('pagibigNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->pagibigNo }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-passport"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('pagibigNo') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="philhealthNo">Philhealth No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="philhealthNo" name="philhealthNo" placeholder="Philhealth Number"
		            class="input {{ $errors->has('philhealthNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->philhealthNo }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-passport"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('philhealthNo') }}</p>
		</div><!-- field -->

		<div class="field">
		    <label class="label" for="bankNo">Bank Account No.:</label>
		
		    <div class="control has-icons-right">
		        <input type="text" id="bankNo" name="bankNo" placeholder="Bank Account Number"
		            class="input {{ $errors->has('bankNo') ? ' is-danger' : '' }}"
		            value="{{ $staff->bankNo }}" required>
		
		        <span class="icon is-small is-right">
		            <i class="fas fa-passport"></i>
		        </span><!-- icon -->
		    </div><!-- control -->
		
		    <p class="help is-danger">{{ $errors->first('bankNo') }}</p>
		</div><!-- field -->
	@endcomponent
@endsection
