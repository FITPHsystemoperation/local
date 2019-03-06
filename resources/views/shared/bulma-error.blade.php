@if ( $errors->all() )
    <div class="notification is-danger">
        @foreach ($errors->all() as $error)
            <p class="has-text-centered">{{ $error }}</p>
        @endforeach
    </div>
@endif