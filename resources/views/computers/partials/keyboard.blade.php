<div class="card border-dark">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Keyboard</h4>
            </div>{{-- col --}}

            <div class="col text-right">
                <a class="btn btn-primary" href="/computer/{{ $computer->id }}/keyboard" role="button">Add</a>
            </div>{{-- col --}}
        </div>{{-- row --}}

    </div>{{-- card-header --}}

    <div class="card-body">
        @foreach ($computer->keyboards as $keyboard)
            <h5 class="pt-1">
                &#9656; {{ $keyboard->keyboardName }}
                <form method="post" action="/computer/keyboard/{{ $keyboard->id }}/remove" class="float-right">
                    @csrf
                    <button type="submit" class="close" title="Remove">&times;</button>
                </form>
            </h5>
        @endforeach{{-- $computer->keyboards as $keyboard --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}