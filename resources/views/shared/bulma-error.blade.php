@if ( $errors->all() )
    <article class="message is-danger">
        <div class="message-body">
            @foreach ($errors->all() as $error)
                <p class="subtitle">{{ $error }}</p>
            @endforeach
        </div><!-- message-body -->
    </article><!-- message -->
@endif
