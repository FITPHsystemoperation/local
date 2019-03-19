@extends('shared.layout')

@section('content')
	@component ('computers.components.accessories',
		[
			'computer' => $computer->id,
			'items' => $mouses,
			'accessory' => 'mouse',
			'icon' => 'mouse-pointer',
		])
	@endcomponent
@endsection
