@extends('shared.master')

@section('content')

	<div class="row justify-content-center">
	
		<div class="col-sm-8">
			
		    <div class="card mt-3 border-secondary">

	    		<div class="card-header">
	    			
				    <h3>
				    	Add @yield('software', 'Software') to {{ $computer->compName }}
						<div class="btn-group float-right">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Select Software
							</button>
							<div class="dropdown-menu">

								@foreach ($softwares as $software)
								    <a class="dropdown-item" href="/computer/{{ $computer->id }}/software/{{ $software->id }}/create">{{ $software->softwareName }}</a>
				    			@endforeach

							</div>
						</div>
				    </h3>
	    			
	    		</div>

		    	<div class="card-body">

		    		@yield('form')
				    
		    	</div>

		    </div>

		</div>

	</div>

@endsection