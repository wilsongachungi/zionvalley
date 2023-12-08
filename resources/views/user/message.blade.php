<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Zion</span>-Valley</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Community Environment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Accomodations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Harambee's Structure</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('team')}}">Team</a>
              </li>


            @if(Route::has('login'))



            <li class="nav-item">
                <a class="nav-link" style="background-color: black" href="{{ route('message')}}">Account</a>
              </li>
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

    <div align="center" style="padding: 70px">
      <table style="background-color: black">
        <tr>
          <th style="padding: 10px; font-size: 20px; color: white;">Name </th>
          <th style="padding: 10px; font-size: 20px; color: white;">Date</th>
          <th style="padding: 10px; font-size: 20px; color: white;">Message</th>
          <th style="padding: 10px; font-size: 20px; color: white;">Contribution</th>
          <th style="padding: 10px; font-size: 20px; color: white;">Status</th>
          {{-- <th style="padding: 10px; font-size: 20px; color: white;">Cancel Message</th> --}}
        </tr>

        @foreach($appoint as $appoints)
        <tr align="center">
          <td style="padding: 10px;">{{$appoints->name}}</td>
          <td style="padding: 10px;">{{$appoints->date}}</td>
          <td style="padding: 10px;">{{$appoints->message}}</td>
          <td style="padding: 10px;">{{$appoints->bookfor}}</td>
          <td style="padding: 10px;">{{$appoints->status}}</td>
          {{-- <td><a class="btn btn-danger" onclick="are you sure to delete this" href="{{url('cancel_message',$appoints->id)}}">Cancel</a></td> --}}
        </tr>

        @endforeach
      </table>
    </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
