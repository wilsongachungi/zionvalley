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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                    <h4 class="text-center text-success">Transaction Page</h4>
                    <div class="row ">

                        <div class="col-12 grid-margin">

                            <div class="card">
                                <div class="container d-flex justify-content-between">
                                    <div>
                                        <p class="text-success font-weight-bold">Name:</p>
                                    </div>
                                    <div class="text-center align-item-center">
                                        <p style="color:greenyellow; text-center; align-item:center; content">
                                            @if (Auth::check())
                                                {{ Auth::user()->name }}
                                            @else
                                                Guest
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <h4 class="text-success" style="margin-left:25px">Harambee Balance: <span
                                        style="color:greenyellow; margin-left:20px">100,000</span> </h4>
                                <div class="card-body dark-shade">
                                    <div class="table-responsive">

                                        <table class="table">

                                            <thead>
                                                <tr>
                                                    <th style="color:greenyellow; cursor:pointer">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="modal" data-target="#buyModal">
                                                            BUY
                                                        </button>
                                                    </th>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog"
                                                        aria-labelledby="buyModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content"
                                                                style="background: rgb(0, 63, 0)">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-green"
                                                                        style="color:greenyellow" id="buyModalLabel">
                                                                        BUY
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true"
                                                                            class="text-green">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php
                                                                    if (Auth::check()) {
                                                                        $userName = Auth::user()->name;
                                                                        $amount = 100000;
                                                                        $rate = 1.69;
                                                                    ?>
                                                                    <p style="" class="text-white">Name:
                                                                        <?php echo $userName; ?></p>
                                                                    <!-- Editable input field for amount -->
                                                                    <div class="form-group">
                                                                        <label style="" class="text-white"
                                                                            for="buy-amount">Amount:</label>
                                                                        <input style="color:greenyellow"
                                                                            type="text" class="form-control"
                                                                            id="buy-amount"
                                                                            value="<?php echo $amount; ?>">
                                                                    </div>
                                                                    <!-- Editable input field for rate -->
                                                                    <div class="form-group">
                                                                        <label style="" class="text-white"
                                                                            for="buy-rate">Rate:</label>
                                                                        <input style="color:greenyellow"
                                                                            type="text" class="form-control"
                                                                            id="buy-rate"
                                                                            value="<?php echo $rate; ?>">
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <th style="color:greenyellow; cursor:pointer">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="modal" data-target="#exampleModal">
                                                            SELL
                                                        </button>
                                                    </th>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content"
                                                                style="background: rgb(0, 63, 0)">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-green"
                                                                        style="color:greenyellow"
                                                                        id="exampleModalLabel">
                                                                        SELL</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true"
                                                                            class="text-green">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php
                                                                    if (Auth::check()) {
                                                                        $userName = Auth::user()->name;
                                                                        $amount = 100000;
                                                                        $rate = 1.69;
                                                                    ?>
                                                                    <p class="text-white">Name: <?php echo $userName; ?></p>
                                                                    <!-- Editable input field for amount -->
                                                                    <div class="form-group">
                                                                        <label class="text-white"
                                                                            for="amount">Amount:</label>
                                                                        <input style="color:greenyellow"
                                                                            type="text" class="form-control"
                                                                            id="amount"
                                                                            value="<?php echo $amount; ?>">
                                                                    </div>
                                                                    <!-- Editable input field for rate -->
                                                                    <div class="form-group">
                                                                        <label class="text-white"
                                                                            for="rate">Rate:</label>
                                                                        <input style="color:greenyellow"
                                                                            type="text" class="form-control"
                                                                            id="rate"
                                                                            value="<?php echo $rate; ?>">
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </tr>
                                                <tr style="text-align:left">
                                                    <th style=" color:greenyellow">Todays Rate</th>
                                                    <th style=" color:green; font-weight:bold">1.69</th>
                                                </tr>

                                                <tr>
                                                    <th style="color:greenyellow">Best Seller</th>
                                                    <th style="color:greenyellow">Best Buyer</th>
                                                </tr>
                                                <tr>
                                                    <td style="color:grey; cursor:pointer">1.50</td>
                                                    <td style="color:grey; cursor:pointer">1.60</td>
                                                </tr>
                                                <tr>
                                                    <td style="color:grey ; cursor:pointer">1.40</td>
                                                    <td style="color:grey ; cursor:pointer">1.66</td>
                                                </tr>
                                                <tr>
                                                    <td style="color:grey ; cursor:pointer">1.40</td>

                                                </tr>
                                                <tr>
                                                    <td style="color:grey ; cursor:pointer">1.40</td>

                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <a href="{{ route('account') }}" class="text-decoration-none text-success"
                                    style="margin-left:20px">ACCOUNT</a>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Make a Payment</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Paybill: <strong>840518</strong>.</p>
                                                <p>Account: <strong>ZION VALLEY CBO</strong>.</p>
                                                <form method="" action="">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="payment_method">Choose Payment Method</label>
                                                        <select name="payment_method" id="payment_method"
                                                            class="form-control" required>
                                                            <option value="">Select Payment Method</option>
                                                            <option value="mpesa">MPesa</option>
                                                            <option value="bank_account">Bank Account</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="mpesa_fields" style="display: none;">
                                                        <label for="mpesa_amount">Amount</label>
                                                        <input type="number" name="mpesa_amount" id="mpesa_amount"
                                                            class="form-control" placeholder="Enter Amount">
                                                        <label for="mpesa_number" class="mt-2">MPesa Number</label>
                                                        <input type="text" name="mpesa_number" id="mpesa_number"
                                                            class="form-control" placeholder="Enter MPesa Number">
                                                    </div>
                                                    <div class="form-group" id="bank_fields" style="display: none;">
                                                        <label for="bank_name">Bank Name</label>
                                                        <input type="text" name="bank_name" id="bank_name"
                                                            class="form-control" placeholder="Enter Bank Name">
                                                        <label for="bank_account_number" class="mt-2">Account
                                                            Number</label>
                                                        <input type="text" name="bank_account_number"
                                                            id="bank_account_number" class="form-control"
                                                            placeholder="Enter Account Number">
                                                        <label for="bank_amount" class="mt-2">Amount</label>
                                                        <input type="number" name="bank_amount" id="bank_amount"
                                                            class="form-control" placeholder="Enter Amount">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Pay Now</button>
                                                </form>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var paymentMethodSelect = document.getElementById('payment_method');
            var mpesaFields = document.getElementById('mpesa_fields');
            var bankFields = document.getElementById('bank_fields');

            paymentMethodSelect.addEventListener('change', function() {
                if (this.value === 'mpesa') {
                    mpesaFields.style.display = 'block';
                    bankFields.style.display = 'none';
                } else if (this.value === 'bank_account') {
                    mpesaFields.style.display = 'none';
                    bankFields.style.display = 'block';
                } else {
                    mpesaFields.style.display = 'none';
                    bankFields.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
</nav>
</body>

</html>
