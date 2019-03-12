<div class="box">
    <my-link class="is-primary is-rounded is-small is-pulled-right" lined="true" title="Add Keyboard"
        href="{{ route('computers.keyboard.index', $computer) }}">
        <span class="fas fa-plus"></span>
    </my-link>

    <p class="subtitle">Keyboard</p>

    @if ( $computer->keyboards->all() )
        <hr>
        
        <div class="content">
            <ul>
                @foreach ($computer->keyboards as $keyboard)
                    <li>
                        {{ $keyboard->keyboardName }}

                        <form method="post" class="is-pulled-right" action="{{ route('computers.keyboard.detach', [$computer->id, $keyboard->id]) }}">
                            @csrf
                            @method ('patch')

                            <my-submit class="is-danger is-rounded is-small" lined="true" title="Remove Keyboard">
                                <span class="fas fa-times"></span>
                            </my-submit>
                        </form>
                    </li>
                @endforeach{{-- $computer->keyboards as $keyboard --}}
            </ul>
        </div>
    @endif
</div>
