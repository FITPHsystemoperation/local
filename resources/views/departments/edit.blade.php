@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Update Department</p>
	            <a class="delete" href="{{ route('departments.show', $department->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('departments.update', $department->id) }}">
				@csrf
				@method ('patch')

		        <section class="modal-card-body">
		        	<div class="field">
		                <label class="label" for="departmentName">Department Name:</label>
		            
		                <div class="control has-icons-right">
		                    <input type="text" id="departmentName" name="departmentName" placeholder="Department Name"
		                        class="input {{ $errors->has('departmentName') ? ' is-danger' : '' }}"
		                        value="{{ $department->departmentName }}" autofocus required>
		            
		                    <span class="icon is-small is-right">
		                        <i class="fas fa-users"></i>
		                    </span><!-- icon -->
		                </div><!-- control -->
		            
		                <p class="help is-danger">{{ $errors->first('departmentName') }}</p>
		            </div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record	</button>

		            <my-link href="{{ route('departments.show', $department->id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h2>Update Department Record</h2>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')


					<div class="form-group row">
						<label for="departmentName" class="col-md-3 col-form-label text-md-right">Department Name</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="departmentName" name="departmentName" placeholder="Department Name" value="{{ $department->departmentName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-outline-secondary" href="{{ route('departments.show', $department->id) }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
