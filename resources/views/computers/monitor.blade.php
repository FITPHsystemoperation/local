@extends('shared.layout')

@section('content')
	@component ('computers.components.accessory-input', [
			'computer' => $computer->id,
			'items' => $monitors,
			'accessory' => 'monitor',
			'icon' => 'desktop',
		])
	@endcomponent
@endsection
