<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .img1{
            width: 1500px;
            height: 500px;
        }

            @media (max-width: 768px) {

        .img1{
            width: 110%;
            height: 90%
        }
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>zion valley </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/style.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <script src="https://kit.fontawesome.com/e4203622a6.js" crossorigin="anonymous"></script>



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
              <a href="#"><span class="mai-mail text-primary"></span>zionvalleykenya@gmail.com</a>
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
              <a class="nav-link" href="{{ route('accomodation')}}">Accomodation</a>
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

          </ul>
        </div>
    </nav>
  </header>

  <div id="carouselExample" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img1" src="../assets/img/cbo.jpg" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption">
            <h5></h5>

        </div>
      </div>
      <div class="carousel-item">
        <img class="img1"  src="../assets/img/INursery_MG_5866-scaled.jpg" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption">
            <h5>Indeginous tree preservation</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img1"  src="../assets/img/safari.jpg" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption">
            <h5 style="color:green">Nature Walk</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>





  <div class="container1">
    <div class="text"  >
      <img class="img1" src="../assets/img/HandRail Tree Branches Best.JPG" alt="">
    </div>
    <div class="text">
        <h4 align="center">Zion Valley: A Nature Oasis for Relaxation and Adventure</h4>
        <p>
            Welcome to Zion Valley Resort, a serene escape enveloped in the natural beauty of majestic
            mountains and lush greenery. Immerse yourself in a plethora of activities, from
            invigorating hiking trails and leisurely nature walks to breathtaking waterfall views.
            Our accommodations range from cozy cabins to spacious suites, each providing a
            comfortable retreat with unparalleled scenery. Thrill-seekers can indulge in rock
            climbing and zip-lining, while those seeking relaxation can unwind in our wellness
            center or savor locally sourced cuisine at our restaurant with panoramic views.
            Zion Valley Resort invites you to embark on a harmonious journey of enjoyment and
            rejuvenation in the heart of nature.</p>
    </div>

  </div>




 @include('user.doc')
 @include('user.lattest')
 @include('user.lattest')






<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script>
    let modelBox = document.getElementById("model-box");

    document.onmouseleave = function(){
        modelBox.style.display = "lock";
    }

    function closeModel(){
        modelBox.style.display = "none";
    }
</script>

</body>
</html>
