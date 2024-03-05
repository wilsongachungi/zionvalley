
<style>
        .dark-shade {
            background-color: #002000; 
            color: white; /* Text color */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4); 
        
        }
    </style>
<nav class="sidebar sidebar-offcanvas dark-shade" id="sidebar" >
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img style="height: 70px" src="assets/img/logo1.png"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img src="assets/img/logo1.png" alt="logo" /></a>
    </div>
    <ul class="nav">

        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('info') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account"></i>
                </span>
                <span class="menu-title"style="color:greenyellow" >Profile</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('account') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-currency-usd"></i>
                </span>
                <span class="menu-title" style="color:greenyellow">Account</span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user_comment') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-comment"></i>
                </span>
                <span class="menu-title" style="color:greenyellow">Comments</span>
            </a>
        </li> --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('assignment') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-envelope"></i>
                </span>
                <span class="menu-title" style="color:greenyellow">Message</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('downloads') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-download"></i>
                </span>
                <span class="menu-title" style="color:greenyellow">Downloads</span>
            </a>
        </li>
        <a class="nav-link" href="{{ route('logout') }}">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
        </a>
        </li>
    </ul>
</nav>
