<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="../assets/css/style.css">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>zion valley </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

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
              <a href="#"><span class="mai-mail text-primary"></span> zionvalleykenya@gmail.com</a>
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
                <a class="nav-link" href="{{ route('contactzion')}}">Connect</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('team')}}">Team</a>
              </li>

            @if(Route::has('login'))




            @auth

            @else

              @endauth

              @endif
          </ul>
        </div>

    </nav>
  </header>


  <div class="page-hero bg-image " style="background-image: url(../assets/img/projects.jpg); width: 100%; height:400px">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead" style="color:  black; text-size:25px"></span>
        <h1 class="display-4"><strong style="color:  white">Projects</strong></h1>

      </div>
    </div>
  </div>




  <div class="container text-center position-relative" style="margin-top: 20px">
    <h5>Ongoing Projects</h5>
    <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <img src="../assets/img/10 slope.jpg" class="w-25" alt="Image 1">
                    <img src="../assets/img/13 slope.jpg" class="w-25" alt="Image 2">
                    <img src="../assets/img/17 slope.jpg" class="w-25" alt="Image 3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="../assets/img/21 slope.jpg" class="w-25" alt="Image 4">
                    <img src="../assets/img/23 slope.jpg" class="w-25" alt="Image 5">
                    <img src="../assets/img/17 slope.jpg" class="w-25" alt="Image 6">
                </div>
            </div>

    </div>

    <button class="custom-carousel-control custom-carousel-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        &lt;
    </button>
    <button class="custom-carousel-control custom-carousel-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        &gt;
    </button>
</div>
 </div>

 <div class="container text-center position-relative" >
    <h5>Future Projects</h5>
    <div id="imageCarousel2" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner d-md-flex flex-md-column">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <img src="../assets/img/10 slope.jpg" class="w-25" alt="Image 1">
                    <img src="../assets/img/13 slope.jpg" class="w-25" alt="Image 2">
                    <img src="../assets/img/17 slope.jpg" class="w-25" alt="Image 3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="../assets/img/21 slope.jpg" class="w-25" alt="Image 4">
                    <img src="../assets/img/23 slope.jpg" class="w-25" alt="Image 5">
                    <img src="../assets/img/17 slope.jpg" class="w-25" alt="Image 6">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:greenyellow" >Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#"> Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:greenyellow" >More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Member</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:greenyellow" >Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color:greenyellow" >Contact</h5>
          <p class="footer-link mt-2">Nyeri,Mathari behind outspan college</p>
          <a href="#" class="footer-link">+254 792 668219</a>
          <a href="#" class="footer-link">zionvalley@gmail.com</a>

          <h5 class="mt-3" style="color:greenyellow" >Social Media</h5>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = new bootstrap.Carousel(document.getElementById('imageCarousel'), {
            interval: false, // diseble the automatic sliding
        });

        var myCarousel = new bootstrap.Carousel(document.getElementById('imageCarousel2'), {
            interval: false, // diseble the automatic sliding
        });
    });
</script>

</body>
</html>