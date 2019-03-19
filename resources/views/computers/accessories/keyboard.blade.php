@extends('shared.layout')

@section('content')
	@component ('computers.components.accessory-input', [
			'computer' => $computer->id,
			'items' => $keyboards,
			'accessory' => 'keyboard',
			'icon' => 'keyboard',
		])
	@endcomponent
@endsection
