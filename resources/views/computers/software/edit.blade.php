@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Update Software Information</p>

	            <a class="delete" aria-label="close" href="{{ route('computers.show', $computer_software->computer_id) }}"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" @submit="submit"
				action="{{ route('computers.software.update', [$computer_software->computer_id, $computer_software->id]) }}">
				@csrf
				@method ('patch')

		        <section class="modal-card-body">
					@foreach ($computer_software->software->specList as $spec)
						<div class="field is-horizontal">
							<div class="field-label is-normal">
								<label class="label" for="{{ $spec }}">{{ ucwords($spec) }}:</label>
							</div>{{-- field-label --}}

							<div class="field-body">
								<div class="field">
									<div class="control">
								        <input type="text" id="{{ $spec }}" name="{{ $spec }}" placeholder="{{ ucwords($spec) }}"
								            class="input" {{ $loop->first ? 'autofocus' : '' }}
								            value="{{array_key_exists($spec, $computer_software->specs) ?
												$computer_software->specs[$spec] : '' }}">
								    </div><!-- control -->
								</div>{{-- field --}}
							</div>{{-- field-body --}}
						</div>{{-- field --}}
					@endforeach{{-- $computer_software->software->specList as $spec --}}
		        </section><!-- modal-card-body -->
		        
		        <footer class="modal-card-foot">
		        	<button class="button is-info" :class="{ 'is-loading': isLoading }">Save Record</button>

		        	<button class="button is-danger" :class="{ 'is-loading': isLoading }" @click="submit"
			        	onclick="event.preventDefault(); document.getElementById('delete_form').submit();">
				        Delete Record
				    </button>

		            <my-link class="button" href="{{ route('computers.show', $computer_software->computer_id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
		    </form>
	    </div><!-- modal-card -->
		
		<form id="delete_form" method="post"
			action="{{ route('computers.software.destroy', [$computer_software->computer_id, $computer_software->id]) }}">
			@csrf
			@method ('delete')
		</form>
	</div><!-- modal -->

	<div class="container my-3">
		<div class="card border-dark">
			<div class="card-header">
				<h3>Edit {{ ucwords($computer_software->software->softwareName) }} Details</h3>
			</div>{{-- card-header --}}

			<div class="card-body">

					@foreach ($computer_software->software->specList as $spec)
						<div class="form-group row">
							<label for="{{ $spec }}" class="col-md-3 col-form-label text-md-right">{{ ucfirst($spec) }}:</label>
								
							<div class="col-md-7">
								<input type="text" class="form-control" id="{{ $spec }}" name="{{ $spec }}"
									value="{{array_key_exists($spec, $computer_software->specs) ?
										$computer_software->specs[$spec] : '' }}"
										{{ $loop->first ? 'autofocus' : '' }} >
							</div>{{-- col --}}
						</div>{{-- row --}}
					@endforeach{{-- $computer_software->software->specList as $spec --}}

					<div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
							<button type="submit" class="btn btn-primary">Save Record</button>

							<a class="btn btn-danger" role="button" href="#"
								onclick="event.preventDefault(); document.getElementById('delete_form').submit();">
								Delete Record
							</a>

							<a class="btn btn-outline-secondary" role="button"
								href="{{ route('computers.show', $computer_software->computer_id) }}">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
				</form>

			</div>{{-- card-body --}}
		</div>{{-- card --}}
	</div>{{-- container --}}
@endsection