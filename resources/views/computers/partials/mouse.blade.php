@component ('computers.components.accessory-output', [
        'computer' => $computer->id,
        'accessory' => 'mouse',
        'items' => $computer->mouses,
    ])
@endcomponent
