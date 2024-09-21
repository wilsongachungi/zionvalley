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
                                                    <td>{{ Auth::user()->profileInformation->email ?? 'N/A' }}</td>
                                                    <td>{{ Auth::user()->profileInformation->country ?? 'N/A' }}</td>
                                                    <td>{{ Auth::user()->profileInformation->residence ?? 'N/A' }}</td>
                                                    <td>{{ Auth::user()->profileInformation->age ?? 'N/A' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>WhatsApp</th>
                                                    <th>M-Pesa</th>
                                                    <th>Category</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (Auth::user()->phoneInfos as $phoneInfo)
                                                    <tr>
                                                        <td>{{ $phoneInfo->is_whatsapp ? 'Yes' : 'No' }}</td>
                                                        <td>{{ $phoneInfo->is_mpesa ? 'Yes' : 'No' }}</td>
                                                        <td>{{ $phoneInfo->category }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>


                                        <br>
                                        <h4 class="card-title" style="color:greenyellow">Who you said you are</h4>
                                        <!-- Display Identity Data -->
                                        @if ($identity)
                                            <div>
                                                <p>{{ $identity->identify_data }}</p>
                                                <button class="edit-btn"
                                                    data-item-id="{{ $identity->id }}">Edit</button>
                                                <div class="edit-form" id="edit-form-{{ $identity->id }}"
                                                    style="display: none;">
                                                    <form action="{{ route('update.identity', $identity->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <label for="identify_data">Edit:</label>
                                                        <input type="text" id="identify_data" name="identify_data"
                                                            value="{{ $identity->identify_data }}">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @else
                                            <p>No identity data found.</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="dark-shade" style="color:greenyellow" data-toggle="modal"
                        data-target="#uploadModal">
                         Add more information or edit
                    </button>

				

                    <!-- Modal -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background: rgb(0, 49, 0)">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color:greenyellow">Upload
                                        Form</h5>
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
                                                                {{ Session::get('passport_success') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body dark-shade">
                                                    <h6 class="card-title" style="color:greenyellow">Completing
                                                        Profile Information</h6>
                                                    <form action="{{ route('complete_profile') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input style="color:antiquewhite" type="email"
                                                                class="form-control" id="email" name="email"
                                                                value="{{ old('email') }}">
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
                                                            <label for="residence"
                                                                style="color:antiquewhite">Residence:</label>
                                                            <input style="color:antiquewhite" type="text"
                                                                class="form-control" id="residence" name="residence"
                                                                value="{{ old('residence') }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Information</button>
                                                    </form>

                                                    @if (session('success'))
                                                        <div class="alert alert-success mt-3">
                                                            {{ session('success') }}
                                                        </div>
                                                    @endif
                                                </div>

                                                <!-- Phone Info Table -->
                                                <!-- Form inside the modal -->
                                                <form action="{{ route('phoneInfo.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <p>Choose if the number given is whatsapp / mpesa number and
                                                                choose category</p>
                                                            <thead>
                                                                <tr>

                                                                    <th style="color:greenyellow">WhatsApp</th>
                                                                    <th style="color:greenyellow">M-Pesa</th>
                                                                    <th style="color:greenyellow">Category</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    <td>
                                                                        <input type="checkbox" name="is_whatsapp"
                                                                            id="whatsapp">
                                                                        <label for="whatsapp">WhatsApp</label>
                                                                    </td>

                                                                    <!-- M-Pesa Checkbox -->
                                                                    <td>
                                                                        <input type="checkbox" name="is_mpesa"
                                                                            id="mpesa">
                                                                        <label for="mpesa">M-Pesa</label>
                                                                    </td>

                                                                    <!-- Category Dropdown -->
                                                                    <td>
                                                                        <select name="category" id="category"
                                                                            class="form-control text-light">
                                                                            <option value="Financial Supporter">
                                                                                Financial Supporter</option>
                                                                            <option value="CBO Member">CBO Member
                                                                            </option>
                                                                            <option value="CBO Land Owner">CBO Land
                                                                                Owner</option>
                                                                            <option value="Employee">Employee</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit"
                                                            class="btn btn-primary mt-3">Save</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');
                    const editForm = document.getElementById(`edit-form-${itemId}`);

                    // Toggle visibility of edit form
                    if (editForm.style.display === 'none') {
                        editForm.style.display = 'block';
                    } else {
                        editForm.style.display = 'none';
                    }
                });
            });
        });
    </script>

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
