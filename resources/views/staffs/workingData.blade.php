@extends('shared.master')

@section('content')
	<div class="container my-3">
		<h1 class="display-4">{{ "$staff->firstName $staff->lastName" }}</h1>

		<div class="card border-secondary mt-3">
			<div class="card-header">
				<h4>Update Work Related Data</h4>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="/staff/{{ $staff->id }}/working-data">
					@csrf

					<div class="form-group row">
						<label for="dateHired" class="col-md-3 col-form-label text-md-right">Date Hired:</label>
						<div class="col-md-7">
							<input type="date" class="form-control" id="dateHired" name="dateHired" value="{{ $staff->dateHired }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="employment_stat_id" class="col-md-3 col-form-label text-md-right">Employment Status:</label>
							
						<div class="col-md-7">
							<select class="c-select form-control" id="employment_stat_id" name="employment_stat_id" required>
								@foreach ($stats as $stat)
									<option value="{{ $stat->id }}"
										{{ $staff->employment_stat_id === $stat->id ? 'selected' : '' }}>
											{{ $stat->statDesc }}
									</option>
								@endforeach
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="job_title_id" class="col-md-3 col-form-label text-md-right">Job Title:</label>
						
						<div class="col-md-7">
							<select class="c-select form-control" id="job_title_id" name="job_title_id" required>
								@foreach ($titles as $title)
									<option value="{{ $title->id }}" {{ $staff->job_title_id === $title->id ? 'selected' : '' }}>
										{{ $title->titleName }}
									</option>
								@endforeach
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="department_id" class="col-md-3 col-form-label text-md-right">Department:</label>
						
						<div class="col-md-7">
							<select class="c-select form-control" id="department_id" name="department_id" required>
								@foreach ($departments as $department)
									<option value="{{ $department->id }}"
										{{ $staff->department_id === $department->id ? 'selected' : '' }} >
											{{ $department->departmentName }}
									</option>
								@endforeach
							</select>
						</div>
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="dailyRate" class="col-md-3 col-form-label text-md-right">Daily Rate:</label>
						
						<div class="col-md-7">
							<input type="number" class="form-control" id="dailyRate" name="dailyRate" value="{{ $staff->dailyRate }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">
								{{ $staff->isCompleted ? 'Save Record' : 'Go Next' }}
							</button>

							<a class="btn btn-outline-secondary" href="/staff/{{ $staff->id }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
