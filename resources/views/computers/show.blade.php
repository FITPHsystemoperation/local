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
							@include ('computers.partials.monitor')
					    </div><!-- column -->
					
					    <div class="column is-6">
							@include ('computers.partials.charger')
					    </div><!-- column -->
					</div><!-- columns -->
			    </div><!-- message-body -->
			</article><!-- message -->
	    </div><!-- container -->
	</section><!-- section -->
@endsection
