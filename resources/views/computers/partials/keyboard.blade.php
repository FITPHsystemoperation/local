<div class="card border-dark">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Keyboard</h4>
            </div>{{-- col --}}

            <div class="col text-right">
                <a class="btn btn-primary" role="button" href="{{ route('computers.keyboard.index', $computer) }}">Add</a>
            </div>{{-- col --}}
        </div>{{-- row --}}

    </div>{{-- card-header --}}

    <div class="card-body">
        @foreach ($computer->keyboards as $keyboard)
            <h5 class="pt-1">
                &#9656; {{ $keyboard->keyboardName }}
                <form method="post" class="float-right" action="{{ route('computers.keyboard.detach', [$computer->id, $keyboard->id]) }}">
                    @csrf

                    @method ('patch')

                    <button type="submit" class="close" title="Remove">&times;</button>
                </form>
            </h5>
        @endforeach{{-- $computer->keyboards as $keyboard --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}