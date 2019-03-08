<div class="box">
    <my-link class="is-primary is-rounded is-small is-pulled-right" lined="true" title="Add Mouse"
        href="{{ route('computers.mouse.index', $computer->id) }}">
        <span class="fas fa-plus"></span>
    </my-link>

    <p class="subtitle">Mouse</p>

    @if ( $computer->mouses->all() )
        <hr>

        <div class="content">
            <ul>
                @foreach ($computer->mouses as $mouse)
                    <li>
                        {{ $mouse->mouseName }}

                        <form method="post" class="is-pulled-right" action="{{ route('computers.mouse.detach', [$computer->id, $mouse->id]) }}">
                            @csrf
                            @method ('patch')
                             
                            <my-submit class="is-danger is-rounded is-small" lined="true" title="Remove Mouse">
                                <span class="fas fa-times"></span>
                            </my-submit>
                        </form>
                    </li>
                @endforeach{{-- $computer->mouses as $mouse --}}
            </ul>
        </div>
    @endif
</div>
