<header>
    {{-- <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +254 792 668219</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span>zionvalleykenya@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><span class="text-primary">Zion</span>-Valley</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::route()->getName() === 'index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('community') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('community') }}">Community Environment</a>
                    </li>
                    <li class="nav-item {{ Request::is('project') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('project') }}">Projects</a>
                    </li>
                    <li class="nav-item {{ Request::is('accomodation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('accomodation') }}">Accomodation</a>
                    </li>
                    <li class="nav-item {{ Request::is('harambee') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('harambee') }}">Harambee</a>
                    </li>
                    <li class="nav-item {{ Request::is('contactzion') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contactzion') }}">Connect</a>

                        @guest

                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a style="color:green" class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endguest
                    </li>

                    <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                        @auth

                        {{-- <li class="nav-item {{ Request::is('') ? 'active' : '' }}">
                        <a style="color:green" class="nav-link" href="{{ route('message') }}">Profile</a>
                    </li> --}}
                    @auth
                    @php
                    $fullName = Auth::user()->name;
                    $firstName = explode(' ', $fullName)[0];
                    @endphp

                    <div 
                        style="position: absolute; top: 3px; right: 2px; padding: 8px; background-color: display: flex; align-items: center;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{ $firstName }}
                            </button>
                            <div class="dropdown-menu">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                                <a href="{{ route('info') }}" class="dropdown-item">Profile</a>
                                <a href="{{ route('profile.show') }}" class="dropdown-item">Change Password</a>
                            </div>
                        </div>
                    </div>
                    @endauth
                    @else
                    {{-- <li class="nav-item {{ Request::is('') ? 'active' : '' }}">
                    <a style="color:green" class="nav-link" href="{{ route('login') }}">login</a>
                    </li> --}}
                    @endauth
                    @endif
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>

</header>