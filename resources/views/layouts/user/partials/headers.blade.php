<header>

    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        .navbar-nav .nav-item a.nav-link {
            color: antiquewhite;

        }

        .navbar-nav .nav-item.active a.nav-link,
        .navbar-nav .nav-item a.nav-link:hover {
            color: greenyellow;

        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5);

        }

        .btn-secondary {
            background-color: transparent !important;
            color: inherit;
            /* Optional: Inherit text color from parent */
            border-color: inherit;
            /* Optional: Inherit border color from parent */
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><span class="text-primary">Zion</span>-Valley</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span style="background-color: rgba(0, 78, 0)" class="navbar-toggler-icon"></span>
            </button>




            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">

                    <li style="list-style-type: none;"
                        class="nav-item {{ Request::route()->getName() === 'index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index') }}">Welcome to Zion</a>
                    </li>
                    <li style="list-style-type: none;" class="nav-item {{ Request::is('community') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('community') }}">Community</a>
                    </li>
                    <li style="list-style-type: none;" class="nav-item {{ Request::is('project') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('project') }}">Projects</a>
                    </li>
                    <li style="list-style-type: none;"
                        class="nav-item {{ Request::is('accomodation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('accomodation') }}">Accommodation</a>
                    </li>
                    <li style="list-style-type: none;" class="nav-item {{ Request::is('harambee') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('harambee') }}">Harambee</a>
                    </li>
                    <li style="list-style-type: none;"
                        class="nav-item {{ Request::is('contactzion') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contactzion') }}">Connect</a>
                    </li>

                    <li style="list-style-type: none;" class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                    </li>
                    @auth

                    @else
                        <li style="list-style-type: none;" class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
        @auth
            @php
                $fullName = Auth::user()->name;
                $firstName = explode(' ', $fullName)[0];
            @endphp
            <div class="centered-container "
                style=" position:absolute;z-index:1000; align-item:center;  justify-content: center; right:40px; length:50px; margin-top:100px; ">
                @auth
                    <div class="dropdown mr-4">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdownMenu"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color: greenyellow; outline:none">
                            {{ $firstName }}
                        </button>
                        <div class="dropdown-menu" style="background-color: rgba(0, 78, 0); margin-right: 15px; z-index:1"
                            aria-labelledby="userDropdownMenu">
                            <form method="POST" class="ml-2" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item" style="color: greenyellow">Logout</button>
                            </form>
                            <a href="{{ route('info') }}" style="color: greenyellow" class="dropdown-item">Profile</a>
                            <a href="{{ route('profile.show') }}" style="color: greenyellow" class="dropdown-item">Password</a>
                        </div>
                    </div>
                @endauth
            @else
                {{-- <li class="nav-item" id="loginLink" style="list-style-type: none;display:none">
                <a style="color: green;" class="nav-link" href="{{ route('login') }}">Login</a>
            </li> --}}
            @endauth
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            // Toggle login link visibility when navbar is expanded/collapsed
            $('.navbar-toggler').click(function() {
                $('#loginLink').toggle();
            });
        });
    </script>

</header>
