<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #000;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        aside {
            width: 250px;
            background-color: #ddd;
            padding: 20px;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {

            color: #fff;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination button {
            padding: 10px;
            margin: 0 5px;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }


        .small-alert {
            padding: 8px 12px;
            font-size: 14px;
        }

        .small-alert .close {
            font-size: 14px;
        }

        .small-alert.alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .small-alert.alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>

<body>


    <header>
        <h1 style="color:green">Dashboard</h1>
    </header>

    <nav>


        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                @include('user.navigation')


                <div class="container">
                    @if (session()->has('message'))
                        <div class="alert alert-success small-alert alert-dismissible fade show" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger small-alert alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="container-fluid page-body-wrapper">

                        <form action="{{ route('upload_harambee') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="deposit">Deposit</label>
                                <input type="number" class="form-control color-white" id="deposit" name="deposit"
                                    placeholder="Enter deposit amount" required
                                    style="background-color: white; color: black; width: 300px;">
                            </div>

                            <div class="form-group">
                                <label for="withdrawn">Withdrawn</label>
                                <input type="number" class="form-control color-white" id="withdrawn" name="withdrawn"
                                    placeholder="Enter withdrawal amount" required
                                    style="background-color: white; color: black; width: 300px;">
                            </div>

                            <div class="form-group">
                                <label for="harambees">Harambees</label>
                                <input type="number" class="form-control color-white" id="harambees" name="harambees"
                                    placeholder="Enter harambees amount" required
                                    style="background-color: white; color: black; width: 300px;">
                            </div>

                            <div class="form-group">
                                <label for="user_id">Select User</label>
                                <select class="form-control color-white" id="user_id" name="user_id" required
                                    style="background-color: white; color: black; width: 300px;">
                                    <option value="" disabled selected>Select a user</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
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
    </nav>



</body>

</html>
