<!DOCTYPE html>
<html lang="en">
<head>


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


  <div class="page-hero bg-image " style="background-image: url(../assets/img/tree.avif); opacity: 0.5;">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <h5 class="display-4">Harambee</h5>


      </div>
    </div>
  </div>



  <div class="row" id="harambee" style="padding-top: 20px">
    <div class="col" style="margin-left: 45px">
        <img src="../assets/img/tree2.jpeg" alt="" >
    </div>
    <div class="col" style=" margin-left:20px" >
        <h3  style="color:greenyellow; margin-left:20px" >Harambee Trees</h3>
        <p  style="color:greenyellow"><strong>The means by which zion is to be owned collectively</strong></p>
        <p>Zion Valley will issue 'Harambee Trees' as a membership Certificate. <br>
            Issued for professional services,for time, for skills-the use of the land, or use of financial services
        </p>
    </div>
    <div class="col"  style=" margin-left:20px">
        <h3  style="color:greenyellow" >Transparency Online</h3>
        <p>All activities, Historical achievements and future direction proposals to be fully presented online.
            Forum for comments and conversations by and all members.<br>
            Harambee tree growth and fruit harvest projections.
            Harambee's may be exchanged via the website.
        </p>
    </div>

  </div>

<div class="container" style="padding-top: 30px; margin-left:px " >
    <div class="text1">
        <h4 style="color: greenyellow">Community-based organization</h4>
        <p style="color: white">Community-based organizations (CBOs) will play role in dealing with significantly benefit nature preservation. This organization have a vested interest in preserving natural surroundings. CBOs will act as a powerful advocate for sustainable resort development and responsible land use practices. They will help ensure that the resort is designed and operated in a way that minimizes the impact on the environment, such as by promoting eco-friendly construction, waste reduction, and energy efficiency.</p>
    </div>
    <div class="text2">
        <h5 style="color: greenyellow ">Community Needs Assessment: <i class="arrow" onclick="toggleDiv('div1')">&#9660;</i></h5>
        {{-- <h5 style="color: greenyellow ">Community Needs Assessment: <i class="fa-solid fa-envelope" onclick="toggleDiv('div1')"></i></h5> --}}
        <div id="div1" class="myDiv" style="display: none ;transition: opacity 0.3s ease;">
            <p>
                Conduct a thorough assessment of the community's needs and identify areas where employment opportunities are lacking. This could involve surveys, interviews, and discussions with community members to understand their skills, interests, and potential areas for economic growth</p>
        </div>
    </div>
    <div class="text2">
      <h5 style="color: greenyellow; transition: opacity 0.3s ease;">Skills Training Programs: <i class="fa-solid fa-envelope" onclick="toggleDiv('div2')"></i></h5>
      <div id="div2" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
          <p>Develop skills training programs based on the identified needs of the community.
             Offer training in areas such as hospitality, eco-tourism, trail guiding, customer
              service, and other skills relevant to the local economy and the objectives
               of the CBO.</p>
      </div>
  </div>
  <div class="text2">
      <h5 style="color: greenyellow; transition: opacity 0.3s ease;">Mutual benefit <i class="fa-solid fa-envelope" onclick="toggleDiv('div3')"></i></h5>
      <div id="div3" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
          <p>Foster partnerships with existing local businesses to expand their operations or create
             new ventures. This could include collaborations with restaurants, shops, and service
              providers, leading to increased employment opportunities</p>
      </div>
  </div>
  <div class="text2">
    <h5 style="color: greenyellow; transition: opacity 0.3s ease;">Community-Based Conservation Projects: <i class="arrow" onclick="toggleDiv('div4')">&#9660;</i></h5>
    <div id="div4" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
        <p>Engage in conservation projects that not only protect the natural environment but also
            create jobs. This might include initiatives like reforestation programs, wildlife
            monitoring, and sustainable resource management</p>
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
          <p class="footer-link mt-2">NZion Valley CBO No 19  Gatemu Building, Kenyatta road, Nyeri Town - Opposite Toyota</p>
          <a href="#" class="footer-link">+254 792 668219</a>
          <a href="#" class="footer-link">zionvalleykenya@gmail.com</a>

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

    var openDivId = null; // Track the ID of the currently open div

    function toggleDiv(divId) {
      var myDiv = document.getElementById(divId);

      // Check if the clicked div is already open
      if (openDivId === divId && myDiv.style.display === "block") {
        // If yes, close it
        myDiv.style.display = "none";
        openDivId = null; // No div is open
      } else {
        // Close the currently open div if there is one
        if (openDivId !== null) {
          var openDiv = document.getElementById(openDivId);
          openDiv.style.display = "none";
        }

        // Open the clicked div
        myDiv.style.display = "block";
        openDivId = divId; // Update the currently open div
      }
    }
      </script>

</body>
</html>
