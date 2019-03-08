<div class="box">
    <my-link class="is-primary is-rounded is-small is-pulled-right" lined="true" title="Add Charger"
        href="{{ route('computers.charger.index', $computer->id) }}">
        <span class="fas fa-plus"></span>
    </my-link>

    <p class="subtitle">Charger</p>

    @if ( $computer->chargers->all() )
        <hr>

        <div class="content">
            <ul>
                @foreach ($computer->chargers as $charger)
                    <li>
                        {{ $charger->chargerName }}

                        <form method="post" class="is-pulled-right" action="{{ route('computers.charger.detach', [$computer->id, $charger->id]) }}">
                            @csrf
                            @method ('patch')

                            <my-submit class="is-danger is-rounded is-small" lined="true" title="Remove Charger">
                                <span class="fas fa-times"></span>
                            </my-submit>
                        </form>
                    </li>
                @endforeach{{-- $computer->chargers as $charger --}}
            </ul>
        </div>
    @endif
</div>
