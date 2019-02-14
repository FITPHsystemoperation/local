@extends('shared.master')

@section('content')
	<div class="container my-3">
		<h1 class="display-4">{{ "$staff->firstName $staff->lastName" }}</h1>

		<div class="card border-dark mt-3">
			<div class="card-header">
				<h4>Update Accounts Information</h4>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')

				<form method="post" action="{{ route('staffs.account.update', $staff->id) }}">
					@csrf

					@method ('patch')

					<div class="form-group row">
						<label for="birNo" class="col-md-3 col-form-label text-md-right">B.I.R. No:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="birNo" name="birNo" value="{{ $staff->birNo }}" placeholder="B.I.R. Number" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="sssNo" class="col-md-3 col-form-label text-md-right">S.S.S. No:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="sssNo" name="sssNo" value="{{ $staff->sssNo }}" placeholder="S.S.S. Number" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="pagibigNo" class="col-md-3 col-form-label text-md-right">Pagibig No:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="pagibigNo" name="pagibigNo" value="{{ $staff->pagibigNo }}" placeholder="Pagibig Number" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="philhealthNo" class="col-md-3 col-form-label text-md-right">Philhealth No:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="philhealthNo" name="philhealthNo" value="{{ $staff->philhealthNo }}" placeholder="Philhealth Number" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">
						<label for="bankNo" class="col-md-3 col-form-label text-md-right">Bank Account No:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="bankNo" name="bankNo" value="{{ $staff->bankNo }}" placeholder="Bank Account Number" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary"> 
								{{ $staff->isCompleted ? 'Save Record' : 'Go Next' }}
							</button>

							<a class="btn btn-outline-secondary" role="button"
								href="{{ route($staff->isCompleted ? 'staffs.show' : 'staffs.emergency.edit', $staff->id) }}">Go Back
							</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
