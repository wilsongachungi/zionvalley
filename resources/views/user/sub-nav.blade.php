<nav class="sidebar sidebar-offcanvas" id="sidebar">
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
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('account') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-currency-usd"></i>
                </span>
                <span class="menu-title">Account</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user_comment') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-comment"></i>
                </span>
                <span class="menu-title">Comments</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-download"></i>
                </span>
                <span class="menu-title">Downloads</span>
            </a>
        </li>
    </ul>
</nav>
