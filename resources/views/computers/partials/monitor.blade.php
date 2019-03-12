<div class="box">
    <my-link class="is-primary is-rounded is-small is-pulled-right" lined="true" title="Add Monitor"
        href="{{ route('computers.monitor.index', $computer->id) }}">
        <span class="fas fa-plus"></span>
    </my-link>

    <p class="subtitle">Monitor</p>

    @if ( $computer->monitors->all() )
        <hr>

        <div class="content">
            <ul>
                @foreach ($computer->monitors as $monitor)
                    <li>
                        {{ $monitor->monitorName }}

                        <form method="post" class="is-pulled-right" action="{{ route('computers.monitor.detach', [$computer->id, $monitor->id]) }}">
                            @csrf
                            @method ('patch')

                            <my-submit class="is-danger is-rounded is-small" lined="true" title="Remove Monitor">
                                <span class="fas fa-times"></span>
                            </my-submit>
                        </form>
                    </li>
                @endforeach{{-- $computer->monitors as $monitor --}}
            </ul>
        </div>        
    @endif
</div>
