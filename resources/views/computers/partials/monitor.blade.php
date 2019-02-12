<div class="card border-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Monitor</h4>
            </div>{{-- col --}}

            <div class="col text-right">
                <a class="btn btn-primary" href="/computer/{{ $computer->id }}/monitor" role="button">Add</a>
            </div>
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        @foreach ($computer->monitors as $monitor)
            <h5 class="pt-1">
                &#9656; {{ $monitor->monitorName }}
                <form method="post" action="/computer/monitor/{{ $monitor->id }}/remove" class="float-right">
                    @csrf
                    <button type="submit" class="close" title="Remove">&times;</button>
                </form>
            </h5>
        @endforeach{{-- $computer->monitors as $monitor --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}