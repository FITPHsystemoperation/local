@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Update Computer Record</p>

	            <a class="delete" aria-label="close" href="{{ route('computers.show', $computer->id) }}"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit" action="{{ route('computers.update', $computer->id) }}">
				@csrf
				@method ('patch')

		        <section class="modal-card-body">
					<div class="field">
					    <label class="label" for="compName">Computer Name:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="compName" name="compName" placeholder="Computer Name"
					            class="input {{ $errors->has('compName') ? ' is-danger' : '' }}"
					            value="{{ $computer->compName }}" required autofocus="">
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-desktop"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					
					    <p class="help is-danger">{{ $errors->first('compName') }}</p>
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="os">Operating System:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="os" name="os" placeholder="Operating System"
					            class="input" value="{{ $computer->os }}">
					
					        <span class="icon is-small is-right">
					            <i class="fab fa-windows"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="status">Computer Status:</label>
					
					    <div class="control has-icons-right">
					        <input type="text" id="status" name="status" placeholder="Computer Status"
					            class="input" value="{{ $computer->status }}">
					
					        <span class="icon is-small is-right">
					            <i class="fas fa-battery-half"></i>
					        </span><!-- icon -->
					    </div><!-- control -->
					</div><!-- field -->

					<div class="field">
					    <label class="label" for="information">Information:</label>
					
					    <div class="control has-icons-left has-icons-right">
					    	<textarea id="information" name="information" rows="3" placeholder="information" class="textarea">{{ $computer->information }}</textarea>
					    </div><!-- control -->
					</div><!-- field -->
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
					<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

		            <my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Update Computer Record</h3>
			</div>{{-- card-header --}}

			<div class="card-body">


					<div class="form-group row">{{-- compName --}}
						<label for="compName" class="col-md-3 col-form-label text-md-right">Computer Name:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="compName" name="compName" value="{{ $computer->compName }}" required autofocus>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">{{-- os --}}
						<label for="os" class="col-md-3 col-form-label text-md-right">Operating System:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="os" name="os" value="{{ $computer->os }}">
						</div>{{-- col --}}
					</div>{{-- row --}}
					
					<div class="form-group row">{{-- status --}}
						<label for="status" class="col-md-3 col-form-label text-md-right">Computer status:</label>
							
						<div class="col-md-7">
							<input type="text" class="form-control" id="status" name="status" value="{{ $computer->status }}">
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row">{{-- information --}}
						<label for="information" class="col-md-3 col-form-label text-md-right">Computer Information:</label>
							
						<div class="col-md-7">
							<textarea class="form-control" id="information" name="information" rows="3">{{ $computer->information }}</textarea>
						</div>{{-- col --}}
					</div>{{-- row --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Update Record</button>

							<a class="btn btn-outline-secondary" href="{{ route('computers.show', $computer->id) }}" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}	
				</form>
			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection