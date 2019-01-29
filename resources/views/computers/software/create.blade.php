@extends('computers.software.index')

@section('form')
	<form method="post" action="/computer/{{ $computer->id }}/software/{{ $software->id }}/create">

		<h4>
			<span class="lead">Software:</span>
			{{ $software->softwareName }}
		</h4>
		<hr>

		@csrf
		@foreach (json_decode($software->specList) as $spec)
			<fieldset class="form-group">
				<label for="{{ $spec }}">{{ ucfirst($spec) }}:</label>
				<input type="text" class="form-control" id="{{ $spec }}" name="{{ $spec }}" placeholder="{{ $spec }}" value="{{ old( $spec) }}" {{ $loop->first ? 'autofocus' : '' }} >
			</fieldset>
		@endforeach
		<hr>
		
		<button type="submit" class="btn btn-primary">Save</button>

		<a class="btn btn-outline-secondary" href="/computers" role="button">Back</a>

	</form>
@endsection