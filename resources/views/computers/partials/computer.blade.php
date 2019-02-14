<div class="card border-dark">
    <div class="card-header">
        <h2>{{ $computer->compName }}</h2>
    </div>{{-- card-header --}}

    <div class="card-body">
        @include ('shared.status')

        <h4 class="p-2">
            <span class="lead">Operating System:</span>
            {{ $computer->os }}
        </h4>                       

        <h4 class="p-2">
            <span class="lead">Computer Status:</span>
            {{ $computer->status }}
        </h4>

        <h4 class="p-2">
            <span class="lead">Computer Information:</span>
            {{ $computer->information }}
        </h4>
    </div>{{-- card-body --}}

    <div class="card-footer">
        @can ('update', $computer)
            <a href="{{ route('computers.edit', $computer->id) }}" class="btn btn-info">Update</a>
        @endcan                 

        <a href="{{ route('computers.index') }}" class="btn btn-outline-secondary">Go Back</a>
    </div>{{-- card-footer --}}
</div>{{-- card --}}
