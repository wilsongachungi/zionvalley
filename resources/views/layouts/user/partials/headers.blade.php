<header>
    <style>
    /* CSS styles for the navigation items */
    .navbar-nav .nav-item a.nav-link {
        color: antiquewhite;
        /* Set default text color to white */
    }

    .navbar-nav .nav-item.active a.nav-link,
    .navbar-nav .nav-item a.nav-link:hover {
        color: greenyellow;
        /* Set background color on hover and active */
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.5);
        /* Black with 70% transparency */
    }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><span class="text-primary">Zion</span>-Valley</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span style="background-color:rgba(0,78,0)" class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::route()->getName() === 'index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index') }}">Welcome to Zion</a>
                    </li>
                    <li class="nav-item {{ Request::is('community') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('community') }}">Community Environment</a>
                    </li>
                    <li class="nav-item {{ Request::is('project') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('project') }}">Projects</a>
                    </li>
                    <li class="nav-item {{ Request::is('accomodation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('accomodation') }}">Accommodation</a>
                    </li>
                    <li class="nav-item {{ Request::is('harambee') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('harambee') }}">Harambee</a>
                    </li>
                    <li class="nav-item {{ Request::is('contactzion') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contactzion') }}">Connect</a>
                    </li>




                    <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                    </li>
                </ul>

            </div>
        </div>
        @auth
        @php
        $fullName = Auth::user()->name;
        $firstName = explode(' ', $fullName)[0];
        @endphp

    </nav>
    <div class="centered-container" style="margin-top:50px; position:absolute;z-index:1000; align-item:center;  justify-content: center; right:20px; margin-top:70px">
        @auth
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ $firstName }}
            </button>
            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
                <a href="{{ route('info') }}" class="dropdown-item">Profile</a>
                <a href="{{ route('profile.show') }}" class="dropdown-item">Change Password</a>
            </div>
        </div>
        @endauth

        @else
        {{-- Show login link if not logged in --}}
        <li class="nav-item {{ Request::is('login') ? 'active' : '' }}" style="list-style-type: none;">
            <a style="color:green" class="nav-link" href="{{ route('login') }}">Login</a>
        </li>


        @endauth
    </div>
</header>