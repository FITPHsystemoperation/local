<article class="message">
    <div class="message-header">
        <p>Computer</p>

        <div class="buttons">
            <my-link class="is-warning is-rounded" lined="true" href="{{ route('computers.edit', $computer->id) }}" title="Update">
                <span class="fas fa-edit"></span>
            </my-link>

            <my-link class="is-success is-rounded" lined="true" href="{{ route('computers.index') }}" title="Go Back">
                <span class="fas fa-arrow-left"></span>
            </my-link>
        </div>
    </div><!-- message-header -->

    <div class="message-body">
        @include ('shared.bulma-status')
        
        <div class="content">
            <info attr="Computer Name">{{ $computer->compName }}</info>
            <info attr="Operating System">{{ $computer->os }}</info>
            <info attr="Computer Status">{{ $computer->status }}</info>
            <info attr="Computer Information">{{ $computer->information }}</info>
        </div>
        
    </div><!-- message-body -->
</article><!-- message -->
