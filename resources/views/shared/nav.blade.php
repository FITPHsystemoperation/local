<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">System Support</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            @auth
       
                <li class="nav-item">
                    <a class="nav-link" href="/staffs">Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/departments">Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/computers">Computer</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{-- {{ Auth::user()->staff['firstName'] }} --}}
                        <img src="/storage/staffs/{{ Auth::user()->staff['image'] }}" alt=""
                            style="height: 30px; width: 30px; border-radius: 15px;">
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item"
                            href="{{ Auth::user()->staff['firstName'] . Auth::user()->staff['lastName'] }}">
                            {{ Auth::user()->staff['firstName'] . ' ' . Auth::user()->staff['lastName'] }}</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('password.reset') }}">Change Password</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            @else

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

            @endauth
        </ul>

    </div>
</nav>