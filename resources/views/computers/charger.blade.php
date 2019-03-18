@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Charger</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
	        <section class="modal-card-body">
	        	<div class="box">
					<form method="post" action="{{ route('computers.charger.attach', $computer->id) }}">
						@csrf
						@method ('patch')

					    <label class="label" for="charger">Select Charger:</label>
						
						<div class="field is-grouped">
						    <div class="control is-expanded">
								<div class="select is-fullwidth">
								    <select id="charger" name="charger" autofocus>
								    	<option></option>
										@foreach ($chargers as $charger)
											<option value="{{ $charger->id }}" {{ $charger->computer ? 'disabled' : '' }}>
												{{ $charger->chargerName }}
											</option>
										@endforeach{{-- $chargers as $charger --}}
								    </select>
								</div><!-- select -->
						    </div><!-- control -->

						    <div class="control">
						    	<button type="submit" class="button is-link" :class="{ 'is-loading': isLoading }">Attach</button>
						    </div>
						</div><!-- field -->
						
					    <p class="help is-danger">{{ $errors->first('charger') }}</p>
	        		</form>
	        	</div>{{-- box --}}
	            
	        </section><!-- modal-card-body -->
	        
	        <footer class="modal-card-foot">
	            <my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
	        </footer><!-- modal-card-foot -->
	    </div><!-- modal-card -->
	</div><!-- modal -->

	<div class="container">
		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Select Existing Charger</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				@include ('shared.error')
				@include ('shared.status')


					<div class="form-group row">
						<label for="charger" class="col-md-3 col-form-label text-md-right">Select Charger:</label>
							
						<div class="col-md-7">
							<select class="c-select form-control" id="charger" name="charger" required autofocus>
							</select>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Attach Charger</button>

							<a class="btn btn-outline-secondary" role="button" href="{{ route('computers.show', $computer->id) }}">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}

		<div class="card mt-3 border-dark">
			<div class="card-header">
				<h3>Add New Charger</h3>
			</div>{{-- card-header --}}

			<div class="card-body">
				<form method="post" action="{{ route('computers.charger.store', $computer->id) }}">
					@csrf

					<div class="form-group row">
						<label for="chargerName" class="col-md-3 col-form-label text-md-right">Charger Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" name="chargerName" placeholder="Charger name" value="{{ old('chargerName') }}" required>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Charger</button>

							<button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection
