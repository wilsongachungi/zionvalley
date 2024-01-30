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

        .pagination button.active {
            background-color: #555;
            color: #fff;
        }

        @media (max-width: 768px) {
            aside {
                width: 100%;
            }
        }
    </style>
</head>

<body>


    <header>
        <h1 style="color:green">Dashboard</h1>
    </header>

    <nav>
        <a href="">Dashboard</a>
        <a href="{{ route('involve') }}">Get involved</a>
        <a href="{{ route('job_application') }}">Job application</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="">Members</a>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Zionvalley Admin</title>
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

                    <div class="container" style="height: 300px; overflow-y: auto;">
						<table style="width: 100%; border-collapse: collapse; margin-top: 10px; border: 1px solid #ddd;">
							<thead>
								<tr style="border: 1px solid #ddd; background-color: #87CEEB; color: white;">
									<th style="border: 1px solid #ddd;">Name</th>
									<th style="border: 1px solid #ddd;">Email</th>
									<th style="border: 1px solid #ddd;">Phone</th>
									<th style="border: 1px solid #ddd;">Country</th>
									<th style="border: 1px solid #ddd;">ID Number</th>
									<th style="border: 1px solid #ddd;">Age</th>
									<th style="border: 1px solid #ddd;">Category</th>
									<th style="border: 1px solid #ddd;">Passport Image</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($job as $record)
									<tr style="border: 1px solid #ddd; background-color: color: #fff;">
										<td style="border: 1px solid #ddd;">{{ $record->name }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->email }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->phone }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->country }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->idnumber }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->age }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->select }}</td>
										<td style="border: 1px solid #ddd;">{{ $record->passport_image }}</td>
									</tr>
								@empty
									<tr style="border: 1px solid #ddd; background-color: #F5F5F5; color: #000;">
										<td colspan="8" style="border: 1px solid #ddd;">There is no data</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>

                        </main>
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
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="admin/assets/js/off-canvas.js"></script>
            <script src="admin/assets/js/hoverable-collapse.js"></script>
            <script src="admin/assets/js/misc.js"></script>
            <script src="admin/assets/js/settings.js"></script>
            <script src="admin/assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="admin/assets/js/dashboard.js"></script>
            <!-- End custom js for this page -->
        </body>
       </html>
</body>

</html>
