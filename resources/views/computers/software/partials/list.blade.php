<div class="dropdown-menu" id="dropdown-menu" role="menu">
    <div class="dropdown-content">
        @foreach ($softwares as $software)
            <a class="dropdown-item" href="{{ route('computers.software.create', [$computer->id, $software->id]) }}">
                {{ $software->softwareName }}
            </a>
        @endforeach{{-- $softwares as $software --}}
    </div>
</div><!-- dropdown-menu -->
