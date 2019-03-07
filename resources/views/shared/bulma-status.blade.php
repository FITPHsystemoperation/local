@if (session('status'))
    <article class="message is-info">
        <div class="message-body">
            <p class="subtitle">{!! session('status') !!}</p>
        </div><!-- message-body -->
    </article><!-- message -->
@endif