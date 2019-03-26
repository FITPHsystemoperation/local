<div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
        <button class="button is-large is-link is-outlined" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>{{ $month->year }}</span>
            <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
        </button>
    </div><!-- dropdown-trigger -->

    <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
            @for ($i = 0; $i < 10; $i++)
                <a href="{{ route('calendar', [$month->index, (date('Y') -5 + $i)]) }}" class="dropdown-item">{{ date('Y') -5 + $i }}</a>
            @endfor
        </div>
    </div><!-- dropdown-menu -->
</div><!-- dropdown -->
                    