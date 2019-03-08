@extends('shared.layout')

@section('content')
	<section class="section">
	    <div class="container">
			@include ('computers.partials.computer')

			@include ('computers.partials.account')

			@include ('computers.partials.software')

			<article class="message">
			    <div class="message-header">
			        <p>Accessories</p>
			    </div><!-- message-header -->
			
			    <div class="message-body">
					<div class="columns">
					    <div class="column is-6">
							@include ('computers.partials.mouse')
					    </div><!-- column -->
					
					    <div class="column is-6">
							@include ('computers.partials.keyboard')
					    </div><!-- column -->
					</div><!-- columns -->

					<div class="columns">
					    <div class="column is-6">
					        
					    </div><!-- column -->
					
					    <div class="column is-6">
					    </div><!-- column -->
					</div><!-- columns -->
			    </div><!-- message-body -->
			</article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
	<div class="container my-3">


		<div class="row">
			<div class="col-md-6">
			</div>{{-- col --}}

			<div class="col-md-6">
			</div>{{-- col --}}
		</div>{{-- row --}}

		<div class="row mt-3">
			<div class="col-md-6">
				@include ('computers.partials.monitor')
			</div>{{-- col --}}

			<div class="col-md-6">
				@include ('computers.partials.charger')
			</div>{{-- col --}}
		</div>{{-- row --}}
	</div>{{-- container --}}
@endsection
