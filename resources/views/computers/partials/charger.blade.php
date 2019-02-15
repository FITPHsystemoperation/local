<div class="card border-dark">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Charger</h4>
            </div>{{-- col --}}

            <div class="col text-right">
                <a class="btn btn-primary" role="button" href="{{ route('computers.charger.index', $computer->id) }}">Add</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        @component ('shared.check-content', ['data' => $computer->chargers])
            @slot ('content')
                @foreach ($computer->chargers as $charger)
                    <h5 class="pt-1">
                        &#9656; {{ $charger->chargerName }}
                        <form method="post" class="float-right" action="{{ route('computers.charger.detach', [$computer->id, $charger->id]) }}">
                            @csrf

                            @method ('patch')

                            <button type="submit" class="close" title="Remove">&times;</button>
                        </form>
                    </h5>
                @endforeach{{-- $computer->chargers as $charger --}}
            @endslot
        @endcomponent
    </div>{{-- card-body --}}
</div>{{-- card --}}
