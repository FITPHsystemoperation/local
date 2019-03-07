<article class="message">
    <div class="message-header">
        <p>Computer</p>

        <div class="buttons">
            <a class="button is-warning is-rounded is-outlined" href="{{ route('computers.edit', $computer->id) }}" title="Update">
                <span class="fas fa-edit"></span>
            </a>

            <a class="button is-success is-rounded is-outlined" href="{{ route('computers.index') }}" title="Go Back">
                <span class="fas fa-chevron-circle-left"></span>
            </a>
        </div>
    </div><!-- message-header -->

    <div class="message-body">
        <div class="content">
            <info attr="Computer Name">{{ $computer->compName }}</info>
            <info attr="Operating System">{{ $computer->os }}</info>
            <info attr="Computer Status">{{ $computer->status }}</info>
            <info attr="Computer Information">{{ $computer->information }}</info>
        </div>
        
    </div><!-- message-body -->
</article><!-- message -->
