<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 100, 0);
        background-color: rgba(0, 100, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 10px;
        border: 1px solid #888;
        width: 60%;
        max-width: 300px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: green;
        text-decoration: none;
        cursor: pointer;
    }

    .dark-shade {
        background-color: #002000;
        color: white;
        /* Text color */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);

    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account</title>
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        @include('user.sub-nav')
        <div class="container-fluid page-body-wrapper" style="background: rgb(1, 75, 1)">
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                            alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/img/logo1.png" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                                        @if (Auth::check())
                                        {{ Auth::user()->name }}
                                        @else
                                        Guest
                                        @endif
                                    </p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0"></h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    {{-- <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div> --}}
                                    <div class="preview-item-content">
                                        {{-- <a class="nav-link" href="{{ route('profile.show') }}">
                                        <h6 class="preview-subject mb-1">Settings</h6>
                                </a> --}}
                            </div>
                            </a>
                            {{-- <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item preview-item">
                                {{-- <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div> --}}
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>

                </div>
                </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
        </div>
        </nav>

        <div class="main-panel" style="background: rgb(0, 63, 0)">
            <div class="content-wrapper" style="background: rgb(0, 49, 0)">
                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body dark-shade">
                                <div class="table-responsive">
                                    <table class="table">
                                        <div class="container d-flex justify-content-between">
                                            <div>
                                                <p class="text-success font-weight-bold">Account</p>
                                            </div>
                                            <div class="text-center">
                                                <p style="color:greenyellow">
                                                    @if (Auth::check())
                                                    {{ Auth::user()->name }}
                                                    @else
                                                    Guest
                                                    @endif
                                                </p>
                                            </div>
                                        </div>


                                        <thead>
                                            <tr style="text-align:left">
                                                <th style=" color:greenyellow">Todays Rate</th>
                                                <th style=" color:green">1.69</th>
                                            </tr>
                                            <tr>
                                                <th style="color:green">BUY</th>
                                                <th style="color:green">SELL</th>
                                            </tr>
                                            <tr>
                                                <th style="color:greenyellow">BEST BUYER</th>
                                                <th style="color:greenyellow">BEST SELLER</th>                                   
                                                <th style="color:greenyellow">ACTION</th>                                   
                                            </tr>
                                            <tr>
                                                <td style="color:grey">1.50</td>
                                                <td style="color:grey">1.60</td>                                   
                                                <td style="color:green">Details</td>                                   
                                            </tr>
                                            <tr>
                                                <td style="color:grey">1.40</td>
                                                <td style="color:grey">1.66</td>                                   
                                                <td style="color:green">Details</td>                                   
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="container d-flex justify-content-end">
                                        <p class="text-success font-weight-bold text-align-left">Total Kshs: <span
                                                style="color:greenyellow">56,000 </span></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        zionvalleycbo</span>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <script src="admin/assets/js/dashboard.js"></script>
    <script>
    function showDetailsPopup(id) {
        var modal = document.getElementById('detailsModal' + id);
        if (modal) {
            modal.style.display = 'block';
        }
    }

    function hideDetailsPopup(id) {
        var modal = document.getElementById('detailsModal' + id);
        if (modal) {
            modal.style.display = 'none';
        }
    }
    </script>
</body>

</html>
</nav>
</body>

</html>