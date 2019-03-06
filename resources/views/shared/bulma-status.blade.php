@if (session('status'))
    <div class="notification is-info has-text-centered">
        {!! session('status') !!}
    </div>
@endif