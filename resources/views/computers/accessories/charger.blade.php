@extends('shared.layout')

@section('content')
	@component ('computers.components.accessory-input', [
			'computer' => $computer->id,
			'items' => $chargers,
			'accessory' => 'charger',
			'icon' => 'plug',
		])
	@endcomponent
@endsection
