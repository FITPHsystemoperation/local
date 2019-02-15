<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select Software
    </button>

    <div class="dropdown-menu">
        @foreach ($softwares as $software)
            <a class="dropdown-item" href="{{ route('computers.software.create', [$computer->id, $software->id]) }}">
                {{ $software->softwareName }}
            </a>
        @endforeach{{-- $softwares as $software --}}
    </div>{{-- dropdown --}}
</div>{{-- btn-group --}}
