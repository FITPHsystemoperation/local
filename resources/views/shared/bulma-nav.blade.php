<nav class="navbar is-fixed-top is-dark" id="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <p class="navbar-item"><b>System Support</b></p>

        <a role="button" class="navbar-burger burger" :class="{ 'is-active': isActive }" @click="toggleNavbar" aria-label="menu" aria-expanded="false" data-target="navbarContent">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a><!-- burger -->
    </div><!-- navbar-brand -->

    <div id="navbarContent" class="navbar-menu" :class="{ 'is-active': isActive }">
        <div class="navbar-end">
            <a class="navbar-item" href="{{ route('home') }}">Home</a>

            @auth
                <a class="navbar-item" href="{{ route('calendar', [date('m'), date('Y')]) }}">Calendar</a>
                {{-- master-list --}}
                <div class="navbar-item has-dropdown is-hoverable">
                    <span class="navbar-link">Master List</span>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('staffs.index') }}">Staff</a>
                        <a class="navbar-item" href="{{ route('departments.index') }}">Department</a>
                    </div><!-- dropdown -->
                </div><!-- has-dropdown -->
                {{-- computer --}}
                <div class="navbar-item has-dropdown is-hoverable">
                    <span class="navbar-link">Inventory</span>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('computers.index') }}">Computer</a>
                        <a class="navbar-item" href="{{ route('softwares.index') }}">Software</a>
                        <a class="navbar-item" href="{{ route('cables.index') }}">Lan Cables</a>
                        <a class="navbar-item" href="{{ route('passwords.index') }}">Password</a>
                        {{-- <a class="navbar-item" href="/accesories">Accessories</a> --}}
                    </div><!-- dropdown -->
                </div><!-- has-dropdown -->
                {{-- document --}}
                <div class="navbar-item has-dropdown is-hoverable">
                    <span class="navbar-link">Document</span>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('documents.index') }}">Document</a>
                        <a class="navbar-item" href="{{ route('document.category.index') }}">Category</a>
                    </div><!-- dropdown -->
                </div><!-- has-dropdown -->
                {{-- profile --}}
                <div class="navbar-item has-dropdown is-hoverable">
                    <span class="navbar-link">
                        <img src="/storage/staffs/{{ Auth::user()->staff['image'] }}" alt=""
                            style="
                                height: 30px;
                                width: 30px;
                                border-radius: 15px;">
                    </span>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item"
                            href="{{ route('profile', Auth::user()->staff['firstName'] . Auth::user()->staff['lastName']) }}">
                            {{ Auth::user()->staff['firstName'] . ' ' . Auth::user()->staff['lastName'] }}
                        </a>

                        @can ('isDeveloper', auth()->user())
                            <a class="navbar-item" href="{{ route('telescope') }}" target="_blank">Dashboard</a>
                        @endcan

                        <hr class="navbar-divider"></hr>

                        <a class="navbar-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div><!-- dropdown -->
                </div><!-- has-dropdown -->
            @else
                <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endauth
        </div><!-- navbar-start -->
    </div><!-- navbar-menu -->
</nav><!-- navbar -->