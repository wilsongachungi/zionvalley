<!DOCTYPE html>
<html lang="en">
<style>
.dark-shade {
    background-color: #002000;
    color: white;
    /* Text color */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);

}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        @include('user.sub-nav')
        <div class="container-fluid page-body-wrapper">
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
                                    @foreach ($profile as $profiles)
                                    <img class="img-xs rounded-circle" src="profileimage/{{ $profiles->passport }}"
                                        alt="image">
                                    @endforeach

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
                                </a>
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

            <div class="main-panel">
                <div class="content-wrapper" style="background: rgb(0, 49, 0)">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body dark-shade">
                                    <h4 class="card-title" style="color:greenyellow">Profile</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="color:greenyellow">Name</th>
                                                    <th style="color:greenyellow">Phone</th>
                                                    <th style="color:greenyellow">Email</th>
                                                    <th style="color:greenyellow">Country</th>
                                                    <th style="color:greenyellow">Location</th>
                                                    <th style="color:greenyellow">Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ Auth::user()->name }}</td>
                                                    <td>{{ Auth::user()->phone }}</td>
                                                    <td>{{ Auth::user()->email }}</td>
                                                    <td>{{ Auth::user()->profileInformation->country ?? 'N/A' }}</td>
                                                    <td>{{ Auth::user()->profileInformation->residence ?? 'N/A' }}</td>
                                                    <td>{{ Auth::user()->profileInformation->age ?? 'N/A' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Button trigger modal -->
                    <button type="button" class="dark-shade" style="color:greenyellow" data-toggle="modal"
                        data-target="#uploadModal">
                        Profile not complete.Click to Continue
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background: rgb(0, 49, 0)">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color:greenyellow">Upload Form
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="background: rgb(0, 49, 0)">
                                    <form action="{{ route('upload_profile_image') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div id="photo-passport-upload" class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body dark-shade">
                                                        <h6 class="card-title" style="color:greenyellow">Upload Facial
                                                            Picture</h6>
                                                        <input type="file" name="passport" accept="image/*">
                                                        @if (Session::has('passport_success'))
                                                        <div class="alert alert-success mt-2">
                                                            {{ Session::get('passport_success') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body dark-shade ">
                                                        <h6 class="card-title" style="color:greenyellow">Front ID Upload
                                                        </h6>
                                                        <input type="file" name="idimage" accept="image/*">
                                                        @if (Session::has('idimage_success'))
                                                        <div class="alert alert-success mt-2">
                                                            {{ Session::get('idimage_success') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="card">
                                                    <div class="card-body dark-shade">
                                                        <h6 class="card-title" style="color:greenyellow">Back ID Upload
                                                        </h6>
                                                        <input type="file" name="idimageback" accept="image/*">
                                                        @if (Session::has('idimageback_success'))
                                                        <div class="alert alert-success mt-2">
                                                            {{ Session::get('idimageback_success') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>


                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body dark-shade">
                                                    <h6 class="card-title" style="color:greenyellow">Completing Profile
                                                        Information</h6>
                                                    <form action="{{ route('complete_profile') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input style="color:antiquewhite" type="email"
                                                                class="form-control" id="email" name="email"
                                                                value="{{ old('email') }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="age">Age:</label>
                                                            <input style="color:antiquewhite" type="number"
                                                                class="form-control" id="age" name="age"
                                                                value="{{ old('age') }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country">Country:</label>
                                                            <input style="color:antiquewhite" type="text"
                                                                class="form-control" id="country" name="country"
                                                                value="{{ old('country') }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="color:antiquewhite"
                                                                for="residence">Residence:</label>
                                                            <input style="color:antiquewhite" type="text"
                                                                class="form-control" id="residence" name="residence"
                                                                value="{{ old('residence') }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Information</button>
                                                    </form>
                                                    @if(session('success'))
                                                    <div class="alert alert-success mt-3">
                                                        {{ session('success') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
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
</body>

</html>