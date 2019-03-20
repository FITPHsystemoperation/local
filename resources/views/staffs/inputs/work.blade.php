@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Update Work Related Data</p>
	            <a class="delete" href="{{ route('staffs.show', $staff->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('staffs.work.update', $staff->id) }}">
				@csrf
				@method ('patch')
				
		        <section class="modal-card-body">
		            <p class="subtitle has-text-centered has-text-weight-semibold">{{ "$staff->firstName $staff->lastName" }}</p>

					<div class="field">
					    <label class="label" for="dateHired">Date Hired:</label>
					
					    <div class="control">
					        <input type="date" id="dateHired" name="dateHired" placeholder="Document Title"
					            class="input {{ $errors->has('dateHired') ? ' is-danger' : '' }}"
					            value="{{ $staff->dateHired }}" autofocus>
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('dateHired') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="employment_stat_id">Employment Status:</label>
					
					    <div class="control">
					    	<div class="select is-fullwidth  {{ $errors->has('employment_stat_id') ? ' is-danger' : '' }}">
					    	    <select id="employment_stat_id" name="employment_stat_id" required>
					    	        @foreach ($stats as $stat)
										<option value="{{ $stat->id }}"
											{{ $staff->employment_stat_id === $stat->id ? 'selected' : '' }}>
												{{ $stat->statDesc }}
										</option>
									@endforeach
					    	    </select>
					    	</div><!-- select -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('employment_stat_id') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="job_title_id">Job Title:</label>
					
					    <div class="control">
					    	<div class="select is-fullwidth {{ $errors->has('job_title_id') ? ' is-danger' : '' }}">
					    	    <select id="job_title_id" name="job_title_id" required>
									@foreach ($titles as $title)
										<option value="{{ $title->id }}" {{ $staff->job_title_id === $title->id ? 'selected' : '' }}>
											{{ $title->titleName }}
										</option>
									@endforeach
					    	    </select>
					    	</div><!-- select -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('job_title_id') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="department_id">Department:</label>
					
					    <div class="control">
					    	<div class="select is-fullwidth {{ $errors->has('department_id') ? ' is-danger' : '' }}">
					    	    <select id="department_id" name="department_id" required>
					    	        @foreach ($departments as $department)
										<option value="{{ $department->id }}"
											{{ $staff->department_id === $department->id ? 'selected' : '' }} >
												{{ $department->departmentName }}
										</option>
									@endforeach
					    	    </select>
					    	</div><!-- select -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('department_id') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="dailyRate">Daily Rate:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="dailyRate" name="dailyRate" placeholder="Daily Rate"
					            class="input {{ $errors->has('dailyRate') ? ' is-danger' : '' }}"
					            value="{{ $staff->dailyRate }}" required>
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-money-bill-alt"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('dailyRate') }}</p>
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button class="button is-primary" :class="{ 'is-loading': isLoading }">
						{{ $staff->isCompleted ? 'Save Record' : 'Go Next' }}
					</button>

		            <my-link href="{{ route('staffs.show', $staff->id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection
