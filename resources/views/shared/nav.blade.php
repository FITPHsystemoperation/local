<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">System Support</a>

    <button class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            @auth
                {{-- master-list --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Master List
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/staffs">Staff</a>
                        <a class="dropdown-item" href="/departments">Department</a>
                    </div>
                </li>
                {{-- computer --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Computer
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/computers">Computer</a>
                        <a class="dropdown-item" href="/softwares">Software</a>
                        <a class="dropdown-item" href="/accesories">Accessories</a>
                    </div>
                </li>
                {{-- document --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Document
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/documents">Document</a>
                        <a class="dropdown-item" href="/document/categories">Category</a>
                    </div>
                </li>
                {{-- profile --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="/storage/staffs/{{ Auth::user()->staff['image'] }}" alt=""
                            style="
                                height: 30px;
                                width: 30px;
                                border-radius: 15px;">
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item"
                            href="/profile/{{ Auth::user()->staff['firstName'] . Auth::user()->staff['lastName'] }}">
                            {{ Auth::user()->staff['firstName'] . ' ' . Auth::user()->staff['lastName'] }}
                        </a>

                        @can ('isDeveloper', auth()->user())
                            <a class="dropdown-item" href="/dashboard" target="_blank">Dashboard</a>
                        @endcan

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>{{-- dropdowm-menu --}}
                </li>
                
            @else

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endauth
        </ul>
    </div>{{-- collapse --}}
</nav>
