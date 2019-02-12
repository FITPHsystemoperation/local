<div class="card border-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Mouse</h4>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a class="btn btn-primary" role="button" href="/computer/{{ $computer->id }}/mouse">Add</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
            @foreach ($computer->mouses as $mouse)
                <h5 class="pt-1">
                    &#9656; {{ $mouse->mouseName }}
                    <form method="post" action="/computer/mouse/{{ $mouse->id }}/remove" class="float-right">
                        @csrf
                        <button type="submit" class="close" title="Remove">&times;</button>
                    </form>
                </h5>
            @endforeach{{-- $computer->mouses as $mouse --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}