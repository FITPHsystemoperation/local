<div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
        <button class="button is-large is-link is-outlined" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>{{ $month->name }}</span>
            <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
        </button>
    </div><!-- dropdown-trigger -->

    <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
            <a href="{{ route('calendar', ['01', $month->year]) }}" class="dropdown-item">January</a>
            <a href="{{ route('calendar', ['02', $month->year]) }}" class="dropdown-item">February</a>
            <a href="{{ route('calendar', ['03', $month->year]) }}" class="dropdown-item">March</a>
            <a href="{{ route('calendar', ['04', $month->year]) }}" class="dropdown-item">April</a>
            <a href="{{ route('calendar', ['05', $month->year]) }}" class="dropdown-item">May</a>
            <a href="{{ route('calendar', ['06', $month->year]) }}" class="dropdown-item">June</a>
            <a href="{{ route('calendar', ['07', $month->year]) }}" class="dropdown-item">July</a>
            <a href="{{ route('calendar', ['08', $month->year]) }}" class="dropdown-item">August</a>
            <a href="{{ route('calendar', ['09', $month->year]) }}" class="dropdown-item">September</a>
            <a href="{{ route('calendar', ['10', $month->year]) }}" class="dropdown-item">October</a>
            <a href="{{ route('calendar', ['11', $month->year]) }}" class="dropdown-item">November</a>
            <a href="{{ route('calendar', ['12', $month->year]) }}" class="dropdown-item">December</a>
        </div>
    </div><!-- dropdown-menu -->
</div><!-- dropdown -->
                    