<div class="card border-dark">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Charger</h4>
            </div>{{-- col --}}

            <div class="col text-right">
                <a class="btn btn-primary" href="/computer/{{ $computer->id }}/charger" role="button">Add</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        @foreach ($computer->chargers as $charger)
            <h5 class="pt-1">
                &#9656; {{ $charger->chargerName }}
                <form method="post" action="/computer/charger/{{ $charger->id }}/remove" class="float-right">
                    @csrf
                    <button type="submit" class="close" title="Remove">&times;</button>
                </form>
            </h5>
        @endforeach{{-- $computer->chargers as $charger --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}
