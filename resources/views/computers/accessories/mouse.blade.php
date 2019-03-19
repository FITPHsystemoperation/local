@extends('shared.layout')

@section('content')
	@component ('computers.components.accessory-input', [
			'computer' => $computer->id,
			'items' => $mouses,
			'accessory' => 'mouse',
			'icon' => 'mouse-pointer',
		])
	@endcomponent
@endsection
