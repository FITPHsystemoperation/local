@if (session('status'))
    <article class="message is-success">
        <div class="message-body">
            <p class="subtitle is-6">{!! session('status') !!}</p>
        </div><!-- message-body -->
    </article><!-- message -->
@endif