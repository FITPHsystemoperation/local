@extends('computers.software.index')

@section('software', $software->softwareName)

@section('form')
	<form method="post" action="/computer/{{ $computer->id }}/software/{{ $software->id }}/create">

		@csrf
		@foreach ($software->specList as $spec)
			<fieldset class="form-group">
				<label for="{{ $spec }}">{{ ucfirst($spec) }}:</label>
				<input type="text" class="form-control" id="{{ $spec }}" name="{{ $spec }}" placeholder="{{ $spec }}" value="{{ old( $spec) }}" {{ $loop->first ? 'autofocus' : '' }} >
			</fieldset>
		@endforeach
		<hr>
		
		<button type="submit" class="btn btn-primary">Save</button>

		<a class="btn btn-outline-secondary" href="/computer/{{ $computer->id }}" role="button">Back</a>

	</form>
@endsection