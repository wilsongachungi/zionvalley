<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius:10px;
    box-shadow: 2px 6px 4px 8px rgb(40, 41, 41);
        }

        @media (max-width: 768px)
        {
            h3{
                font-size: 20px;
            }

            h4{
                font-size: 15px;
            }
            p{
                font-size: 10px;
            }
       }
    </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>zion valley </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">

  <link rel="stylesheet" href="../assets/css/script.js">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>


    @if(session()->has('message'))
    <div class="alert alert-success">

        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert">
            X
        </button>


    </div>


    @endif

  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +254 792 668219</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> zionvalley@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Zion</span>-Valley</a>
{{--
        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('community')}}">Community Environment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('project')}}">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('accomodation')}}">Accomodations</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('harambee')}}">Harambee's Structure</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contactzion')}}">Contact/Reg</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('team')}}">Team</a>
              </li>

            @if(Route::has('login'))




            @auth

            @else
                <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                </li>

              @endauth

              @endif
          </ul>
        </div>

    </nav>
  </header>


        <div class="container" id="harambee-member" style="padding-top: 30px; padding-bottom:30px">
            <a class="btn btn-primary" style="padding: 5px" href="{{ route('contactzion')}}" >Back</a>
            <form action="" method="post">
                <h3 style="color: greenyellow"></h3>
                <div class="input-container">
                    <label for="username">Full name</label>
                    <input type="text" id="username" name="username" required="" placeholder="Name">
                </div>
                <div class="input-container">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required="" placeholder="Email..">
                </div>
                <div class="input-container">
                    <label for="email">Phone Number</label>
                    <input type="email" id="email" name="email" required="" placeholder="Prefer Mpesa number">
                </div><br>

                <select name="bookfor" id="bookfor" class="input-container" style="padding:10px;width:250px;border-radius: 5px;">
                    <option  value="">--select--</option>
                    <option  value="">fanacial supporter</option>
                    <option  value="">Land Owners</option>
                    <option  value="">Worker</option>
                    <option  value="">Job Application</option>
                    <option  value="">Commitee member</option>
                </select><br><br>

                <div class="input-container">
                    <label for="email">ID Number</label>
                    <input type="idnumber" id="idnumber" name="idnumber" required="" placeholder="ID Number">
                </div>

                <div class="input-container">
                    <label for="email">Age</label>
                    <input type="idnumber" id="idnumber" name="idnumber" required="" placeholder="Age">
                </div>

                <div class="input-container">
                    <label for="email">Passport</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" required="">
                </div><br>
              <button type="submit" class="btn btn-primary" style="padding-top: 10px"> Submit</button>
            </form>
        </div>








<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#"> Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Member</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">Our partner</h5>
          <ul class="footer-menu">
            < <li><a href="#">Wigitech web</a></li>
            <li><a href="#">Globalgreen Plant Center</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">Contact</h5>
          <p class="footer-link mt-2">Nyeri,Mathari behind outspan college</p>
          <a href="#" class="footer-link">+254 792 668219</a>
          <a href="#" class="footer-link">zionvalley@gmail.com</a>

          <h5 class="mt-3" style="color: greenyellow">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 <a href="#" target="_blank">wigitech</a>. All right reserved</p>
    </div>
  </footer>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>


</body>
</html>
