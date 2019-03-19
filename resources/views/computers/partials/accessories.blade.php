<article class="message">
    <div class="message-header">
        <p>Accessories</p>
    </div><!-- message-header -->

    <div class="message-body">
        <div class="columns">
            <div class="column is-6">
                @component ('computers.components.accessory-output', [
                        'computer' => $computer->id,
                        'accessory' => 'mouse',
                        'items' => $computer->mouses,
                    ])
                @endcomponent
            </div><!-- column -->
        
            <div class="column is-6">
                @component ('computers.components.accessory-output', [
                        'computer' => $computer->id,
                        'accessory' => 'keyboard',
                        'items' => $computer->keyboards,  
                    ])
                @endcomponent
            </div><!-- column -->
        </div><!-- columns -->

        <div class="columns">
            <div class="column is-6">
                @component ('computers.components.accessory-output', [
                        'computer' => $computer->id,
                        'accessory' => 'monitor',
                        'items' => $computer->monitors,  
                    ])
                @endcomponent
            </div><!-- column -->
        
            <div class="column is-6">
                @component ('computers.components.accessory-output', [
                        'computer' => $computer->id,
                        'accessory' => 'charger',
                        'items' => $computer->chargers,  
                    ])
                @endcomponent
            </div><!-- column -->
        </div><!-- columns -->
    </div><!-- message-body -->
</article><!-- message -->
