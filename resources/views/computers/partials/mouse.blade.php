<div class="card border-dark">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Mouse</h4>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a class="btn btn-primary" role="button" href="{{ route('computers.mouse.index', $computer->id) }}">Add</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
            @foreach ($computer->mouses as $mouse)
                <h5 class="pt-1">
                    &#9656; {{ $mouse->mouseName }}
                    <form class="float-right" method="post" action="{{ route('computers.mouse.detach', [$computer->id, $mouse->id]) }}">
                        @csrf

                        @method ('patch')

                        <button type="submit" class="close" title="Remove">&times;</button>
                    </form>
                </h5>
            @endforeach{{-- $computer->mouses as $mouse --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}