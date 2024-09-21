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
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="content-wrapper" style="background: rgb(0, 49, 0)">
                    <h4 class="text-center text-success">Job Application</h4>
                    <div class="row align-item-center">
                        <form action="{{ route('job') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                    <label style="color: greenyellow" for="name">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Full name"
                                        value="{{ old('name', $user->name ?? '') }}">
                                    @error('name')
                                        <p class="alert alert-danger py-0">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label style="color: greenyellow" for="email">Email Address</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Email address.."
                                        value="{{ old('email', $user->email ?? '') }}">
                                    @error('email')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                    <label style="color: greenyellow" for="phone">Phone</label>
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" placeholder="Phone.."
                                        value="{{ old('phone', $user->phone ?? '') }}">
                                    @error('phone')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label style="color: greenyellow" for="idNumber">ID/Passport Number</label>
                                    <input type="text" class="form-control @error('idNumber') is-invalid @enderror"
                                        id="idNumber" name="idnumber" placeholder="ID/Passport Number.."
                                        value="{{ old('idNumber') }}">
                                    @error('idNumber')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            @foreach ($profileinfo as $info)
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="country">Country</label>
                                        <input type="text"
                                            class="form-control @error('country') is-invalid @enderror" id="country"
                                            name="country" placeholder="Kenya.."
                                            value="{{ old('country', $info->country ?? '') }}">
                                        @error('country')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="age">Age</label>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror"
                                            id="age" name="age" placeholder="Age.."
                                            value="{{ old('age', $info->age ?? '') }}">
                                        @error('age')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group col-12 col-sm-6">
                                <label style="color: greenyellow" for="selectOption">Job Category</label>
                                <select class="form-control  text-light" id="selectOption" name="select">
                                    <option value="" selected disabled>--Select--</option>
                                    <option value="Masonry">Masonry</option>
                                    <option value="Carpentry">Carpentry</option>
                                    <option value="Security">Security</option>
                                    <option value="Store Keeping">Store Keeping</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Preservation">Tree Preservation</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 10px">Submit</button>
                        </form>
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
        < /body>

        <
        /html>
