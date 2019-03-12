@if ( $data->count() )
    {{ $content }}
@else
    <article class="message is-warning">
        <div class="message-body">
            <p class="subtitle">No record found!</p>
        </div><!-- message-body -->
    </article><!-- message -->
@endif