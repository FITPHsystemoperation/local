<div class="box">
    <my-link class="is-primary is-rounded is-small is-pulled-right" lined="true" title="Add {{ ucwords($accessory) }}"
        href="{{ route("computers.$accessory.index", $computer) }}">
        <span class="fas fa-plus"></span>
    </my-link>

    <p class="subtitle">{{ ucwords($accessory) }}</p>

    @if ( $items->all() )
        <hr>

        <div class="content">
            <ul>
                @foreach ($items as $item)
                    <li>
                        {{ $item->{ $accessory . 'Name' } }}

                        <form method="post" class="is-pulled-right" action="{{ route("computers.$accessory.detach", [$computer, $item->id]) }}">
                            @csrf
                            @method ('patch')

                            <my-submit class="is-danger is-rounded is-small" lined="true" title="Remove {{ ucwords($accessory) }}">
                                <span class="fas fa-times"></span>
                            </my-submit>
                        </form>
                    </li>
                @endforeach{{-- $items as $item --}}
            </ul>
        </div>{{-- content --}}
    @endif{{-- $items->all() --}}
</div>{{-- box --}}