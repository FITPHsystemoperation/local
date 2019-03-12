@extends('shared.layout')

@section('content')
	<div class="modal is-active">
	    <div class="modal-background"></div>
	    
	    <div class="modal-card is-clipped">
	        <header class="modal-card-head">
	            <p class="modal-card-title">Add Software</p>
	            <a class="delete" href="{{ route('computers.show', $computer->id) }}" aria-label="close"></a>
	        </header><!-- modal-card-head -->
	
	        <section class="modal-card-body" style="min-height: 300px;">
				<div class="field is-horizontal">
					<div class="field-label is-normal">
						<label class="label">Software:</label>
					</div>{{-- field-label --}}

					<div class="field-body">
						<div class="field is-narrow">
							<div class="control">
								<div class="dropdown" :class="{ 'is-active': dropdownActive }">
								    <div class="dropdown-trigger">
								        <button class="button is-outlined is-link" @click="toggleDropdown" aria-haspopup="true" aria-controls="dropdown-menu">
								            <span>Software Selection</span>
								            <span class="icon is-small">
								                <i class="fas fa-angle-down" aria-hidden="true"></i>
								            </span>
								        </button>
								    </div><!-- dropdown-trigger -->
								    
									@include ('computers.software.partials.list')
								</div><!-- dropdown -->
							</div>{{-- control --}}
						</div>{{-- field --}}
					</div>{{-- field-body --}}
				</div>{{-- field --}}
	        </section><!-- modal-card-body -->
	        
	        <footer class="modal-card-foot">
	            <my-link href="{{ route('computers.show', $computer->id) }}">Go Back</my-link>
	        </footer><!-- modal-card-foot -->
	    </div><!-- modal-card -->
	</div><!-- modal -->
@endsection