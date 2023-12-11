
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

    th, td {
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
    <h1>Contact</h1>
  </header>

  <nav>
    <a href="{{ route('involve') }}">Get involved</a>
    <a href="{{ route('job_application') }}">Job application</a>
   <a href="{{ route('contact') }}">Contact Us</a>
    <!-- Add more navigation links as needed -->
  </nav>

  <div class="container">
    <aside>
      <h2>Sidebar</h2>
      <!-- Sidebar content goes here -->

    <ul style="padding-top: 20px">
        <li><a href="{{ route('involve') }}">Get involved</a></li>
        <li><a href="{{ route('job_application') }}">Job application</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>

    <!-- Add more navigation links as needed -->

    </aside>

    <main>
      <h2>Main Content</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Country</th>
            <th>IDnumber</th>
            <th>Age</th>
            <th>Category</th>
            <th>IDphoto</th>
            <th>Passport</th>
            <!-- Add more table headers as needed -->
          </tr>
        </thead>
        <tbody>
          <!-- Add more rows as needed -->
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
            <!-- Add more table data as needed -->
          </tr>
        </tbody>
      </table>

      <div class="pagination">
        <button class="active" onclick="changePage(1)">1</button>
        <button onclick="changePage(2)">2</button>
        <button onclick="changePage(3)">3</button>
        <!-- Add more pagination buttons as needed -->
      </div>
    </main>
  </div>

  <script>
    function changePage(pageNumber) {
      // Reset active class for all buttons
      var buttons = document.querySelectorAll('.pagination button');
      buttons.forEach(function(button) {
        button.classList.remove('active');
      });

      // Set active class for the clicked button
      var selectedButton = document.querySelector('.pagination button:nth-child(' + pageNumber + ')');
      selectedButton.classList.add('active');

      // You can add logic here to fetch and display data for the selected page
    }
  </script>

</body>
</html>
