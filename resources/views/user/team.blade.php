<!DOCTYPE html>
<html lang="en">
<head>
    <style>

            @media (max-width: 768px) {

        .img{
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
              <a class="nav-link" href="{{ route('accomodation')}}">Accomodation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('harambee')}}">Harambee</a>
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


<section>
    <h3 align="center" style="color: greenyellow">Our Team</h3>
    <div class="team-row">
        <div class="team-col">
            <div class="user" style="margin-bottom: 1px">
                <img style="" src="../assets/img/chairman.jpeg" alt="">
                <div class="user-info">
                    <h5 style="color: greenyellow">Chairman</h5>
                </div>
            </div>
            <p>representing the organization to external stakeholders, ensuring strategic
                direction, effective decision-making, and compliance with ethical and
                legal standards.
            </p>
        </div>
        <div class="team-col">
            <div class="user" style="margin-bottom: 1px">
                <img style="" src="../assets/img/secretary.jpeg" alt="">
                <div class="user-info">
                    <h5 style="color: greenyellow">Secretary</h5>
                </div>
            </div>
            <p> Administrative tasks, maintaining accurate records, and facilitating
                 communication within an organization, ensuring that meetings are
                 well-documented and information is disseminated efficiently..
            </p>
        </div>
        <div class="team-col" >
            <div class="user" style="margin-bottom: 1px">
                <img style="" src="../assets/img/treasurer-removebg-preview (1).png" alt="">
                <div class="user-info">
                    <h5 style="color: greenyellow">Treasurer</h5>
                </div>
            </div>
            <p>Managing an organization's financial matters, overseeing budgets, financial
                 planning, and reporting, as well as ensuring accurate record-keeping and
                 compliance with financial regulations.
            </p>
        </div>
        <div class="team-col">
            <div class="user" style="margin-bottom: 1px">
                <img style="" src="../assets/img/19 slope.jpg" alt="">
                <div class="user-info">
                    <h5 style="color: greenyellow">Architect</h5>
                </div>
            </div>
            <p>Designs and plans the construction of buildings and structures, combining artistic
                and technical expertise to create functional, aesthetically pleasing, and safe spaces.
            </p>
        </div>
        <div class="team-col">
            <div class="user" style="margin-bottom: 1px">
                <img style="" src="../assets/img/wilson.jpg" alt="">
                <div class="user-info">
                    <h5 style="color: greenyellow">Developer</h5>
                </div>
            </div>
            <p>Creating and Maintaining website.
            </p>
        </div>
        <div class="team-col">
            <div class="user" style="margin-bottom: 1px">
                <img style="" src="../assets/img/19 slope.jpg" alt="">
                <div class="user-info">
                    <h5 style="color: greenyellow">Member Rep</h5>
                </div>
            </div>
            <p> delegate on behalf of an organization's members. This role involves advocating
                 for the interests, concerns, and preferences of the members during discussions,
                 decision-making , and interactions with other stakeholders.
            </p>
        </div>
    </div>
</section>

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">Company</h5>
          <ul class="footer-menu">
            <li><a href="{{ route('community')}}">About Us</a></li>
            <li><a href="#"> Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="{{ route('contactzion')}}">Join as Member</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Wigitech web</a></li>
            <li><a href="#">Globalgreen Plant Center</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 style="color: greenyellow">Contact</h5>
          <p class="footer-link mt-2">Zion Valley CBO No 19  Gatemu Building, Kenyatta road, Nyeri Town - Opposite Toyota</p>
          <a href="#" class="footer-link">+254 792 668219</a>
          <a href="#" class="footer-link">zionvalleykenya@gmail.com</a>

          <h5 class="mt-3" style="color: greenyellow">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 <a href="#cd " target="_blank">wigitech</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
