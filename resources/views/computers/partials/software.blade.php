<article class="message">
    <div class="message-header">
        <p>Softwares</p>
        
        <my-link class="is-primary is-rounded" lined="true" href="{{ route('computers.software.index', $computer->id) }}" title="Add Software">
            <span class="fas fa-plus"></span>
        </my-link>
    </div><!-- message-header -->

    <div class="message-body">
        @component ('shared.bulma-check-content', ['data' => $computer->softwares])
            @slot ('content')
                @foreach ($computer->softwares as $software)
                    <div class="box">
                        <my-link class="is-info is-rounded is-pulled-right" lined="true" title="Update Specification"
                            href="{{ route('computers.software.edit', [$computer->id, $software->id]) }}">
                            <span class="fas fa-edit"></span>
                        </my-link>

                        <p class="subtitle is-4">{{ ucfirst($software->software->softwareName) }}</p>
                        
                        <hr>

                        <div class="columns">
                            @foreach ($software->specs as $key => $spec)
                                <div class="column is-3">
                                    <info attr="{{ $key }}">
                                        @if ( preg_match('/password/i', $key) && Gate::denies('viewPassword', $software))
                                            {!! preg_replace('/./', '&#9679;', $spec) !!}
                                        @else
                                            {{ $spec }}
                                        @endif
                                    </info>
                                </div><!-- column -->

                                {!! ($loop->index + 1) % 4 == 0 ? '</div><div class="columns">' : '' !!}
                            @endforeach{{-- $software->specs as $key => $spec --}}
                        </div><!-- columns -->
                    </div>
                @endforeach{{-- $computer->softwares as $software --}}
            @endslot
        @endcomponent
    </div><!-- message-body -->
</article><!-- message -->
