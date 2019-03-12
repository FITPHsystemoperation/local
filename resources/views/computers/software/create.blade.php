@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Add Software</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
			<form method="post" action="{{ route('computers.software.store', [$computer->id, $software->id]) }}" @submit="submit">
				@csrf
		        <section class="modal-card-body">
		        	<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Software:</label>
						</div>{{-- field-label --}}

						<div class="field-body">
							<div class="field">
								<div class="control">
									<div class="dropdown is-right" :class="{ 'is-active': dropdownActive }">
									    <div class="dropdown-trigger">
									        <div class="button is-outlined is-link is-fullwidth" @click="toggleDropdown" aria-haspopup="true" aria-controls="dropdown-menu">
									            <span>{{ ucwords($software->softwareName) }}</span>
									            <span class="icon is-small">
									                <i class="fas fa-angle-down" aria-hidden="true"></i>
									            </span>
									        </div>
									    </div><!-- dropdown-trigger -->
									    
										@include ('computers.software.partials.list')
									</div><!-- dropdown -->
								</div>{{-- control --}}
							</div>{{-- field --}}
						</div>{{-- field-body --}}
					</div>{{-- field --}}

					<hr>					

					@foreach ($software->specList as $spec)
						<div class="field is-horizontal">
							<div class="field-label is-normal">
								<label class="label" for="{{ $spec }}">{{ ucwords($spec) }}:</label>
							</div>{{-- field-label --}}

							<div class="field-body">
								<div class="field">
									<div class="control">
								        <input type="text" id="{{ $spec }}" name="{{ $spec }}" placeholder="{{ ucwords($spec) }}"
								            class="input {{ $errors->has($spec) ? ' is-danger' : '' }}" {{ $loop->first ? 'autofocus' : '' }}
								            value="{{ old($spec) }}">
								    </div><!-- control -->
								</div>{{-- field --}}
							</div>{{-- field-body --}}
						</div>{{-- field --}}
					@endforeach{{-- $software->specList as $spec --}}
		        </section><!-- modal-card-body -->

		        <footer class="modal-card-foot">
		        	<button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

		            <my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
		        </footer><!-- modal-card-foot -->
	        </form>
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection