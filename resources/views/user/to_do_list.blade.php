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
            background-color: #000;
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

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            margin-top: 10px;
        }

        .input-field {
            width: 100%;
            min-height: 100px;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .submit-button {
            padding: 8px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <header>
        <h1 style="color:green">Dashboard</h1>
    </header>

    <nav>
        <a href="{{ route('show') }}">Dashboard</a>
        <a href="{{ route('involve') }}">Get involved</a>
        <a href="{{ route('job_application') }}">Job application</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="">Members</a>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Corona Admin</title>
            <!-- plugins:css -->
            <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
            <!-- endinject -->
            <!-- Plugin css for this page -->
            <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
            <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
            <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
            <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">

            <link rel="stylesheet" href="admin/assets/css/style.css">
            <!-- End layout styles -->
            <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
        </head>

        <body>
            <div class="container-scroller">
                @include('user.navigation')
                <div class="form-container" style="margin-left: 40px">
                    <h1>Message and Comment</h1>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('storeTask') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="commentInput">Tasks:</label>
                        <textarea type="text" id="commentInput" name="description" class="input-field" placeholder="Add a comment" required></textarea>

                        <label for="messageInput">Message:</label>
                        <textarea type="text" id="messageInput" name="message" class="input-field" placeholder="Type your message" required></textarea>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
