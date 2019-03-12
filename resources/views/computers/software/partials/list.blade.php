<div class="dropdown" :class="{ 'is-active': dropdownActive }">
    <div class="dropdown-trigger">
        <button class="button is-outlined is-link" @click="toggleDropdown" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>Software Selection</span>
            <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
        </button>
    </div><!-- dropdown-trigger -->

    <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
            @foreach ($softwares as $software)
                <a class="dropdown-item" href="{{ route('computers.software.create', [$computer->id, $software->id]) }}">
                    {{ $software->softwareName }}
                </a>
            @endforeach{{-- $softwares as $software --}}
        </div>
    </div><!-- dropdown-menu -->
</div><!-- dropdown -->
