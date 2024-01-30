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
            <!-- End plugin css for this page -->
            <!-- inject:css -->
            <!-- endinject -->
            <!-- Layout styles -->
            <link rel="stylesheet" href="admin/assets/css/style.css">
            <!-- End layout styles -->
            <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
        </head>

        <body>
          
                <!-- partial:partials/_sidebar.html -->
                @include('user.navigation')
                <div class="container">
					<table>
						<thead>
							<tr style="margin-top: 10px; background-color: #87CEEB; color: white; padding: 10px; border-radius: 5px;">
								<th style="color: green; text-align: left; padding-right: 20px;">Tasks</th>
								<th style="color: green; text-align: right; padding-left: 20px;">Message</th>
							</tr>
						</thead>
						<tbody>
							<!-- Add more rows as needed -->
							@forelse ($tasks as $record)
								<tr style="margin-top: 10px; display:flex; flex-wrap: wrap;">
									<td style="color: #fff; flex-basis: 50%; box-sizing: border-box; padding: 5px;">{{ $record->description }}</td>
									<td style="color: #fff; flex-basis: 50%; box-sizing: border-box; padding: 5px;">{{ $record->message }}</td>
								</tr>
							@empty
								<tr>
									<td colspan="2" style="text-align: center;">There is no data</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>



                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
            <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
            <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
            <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
            <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="admin/assets/js/off-canvas.js"></script>
            <script src="admin/assets/js/hoverable-collapse.js"></script>
            <script src="admin/assets/js/misc.js"></script>
            <script src="admin/assets/js/settings.js"></script>
            <script src="admin/assets/js/todolist.js"></script>
            <script src="admin/assets/js/dashboard.js"></script>

        </body>

        </html>
        <!-- Add more navigation links as needed -->
    </nav>



</body>

</html>
