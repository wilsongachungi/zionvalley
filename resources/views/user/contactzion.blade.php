<!DOCTYPE html>
<html lang="en">
<head>
    <style>
     .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 80%;
    background-color: rgba(0, 0, 0, 0.24);
  }

  /* Modal Content */
  .modal-content {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgb(3, 51, 3);
    padding: 20px;
    width: 800px;
    height: 120%; /* Adjust the width as needed */
    margin: auto;
  }

  /* Close button */
  .close {
    color: #fff;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: blue;
    text-decoration: none;
    cursor: pointer;
  }


  /* Custom CSS for responsiveness */
@media (max-width: 576px) {
    /* Adjust modal width for small screens */
    .modal-dialog {
      max-width: 80%;
    }

    /* Center modal header and footer content on small screens */
    .modal-header, .modal-footer {
      text-align: center;
    }
  }

  form {
    max-width: 600px; /* Adjust the max-width as needed */
    margin: 0 auto; /* Center the form horizontally */
  }

  .form-group {
    margin-bottom: 20px; /* Adjust the margin between form groups */
  }

  .img1{
    height: 500px;
    width: 100%;
  }

  /* Responsive adjustments */
  @media (max-width: 576px) {
    .form-group input[type="text"],
    .form-group select {
      width: 98%;
      margin-left: 8px; /* Make the input fields and select options full width */
    }
    .img1{
        height: 30px;
        height: 50%;
    }
  }

  @media (max-width: 576px) {
    #modal .modal-body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Set the height of the modal body to 100% of the viewport height */
    }

    .modal-form {
        width: 90%; /* Adjust the width for small screens */
        max-width: 300px; /* Set a maximum width if desired */
        /* Add any other styles for the form container on small screens */
    }
    #modal .modal-content .close {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 20px;
        color: #000; /* Adjust color as needed */
    }
    .modal-content {
        max-width: 90%; /* Adjust the maximum width of the modal dialog */
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
              <li class="nav-item">
                {{-- <x-app-layout>

                </x-app-layout> --}}
              </li>

              @if(Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" style="background-color: greenyellow" href="{{ route('message')}}">Account</a>
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
          </ul>
        </div>
    </nav>
  </header>

            <!-- Button to trigger the first modal -->
            <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
              Get Connected
            </button>


            <!-- Modal 1 -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 70%; width:50%">
                  <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

              <div class="row mt-5">
                <div class="col-12 wow fadeInLeft">
                    <h5 class="mt-3" style="color: greenyellow">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                      <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-whatsapp"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-youtube"></span></a>
                    </div>
                </div>
              </div>
            </div>
            </div>
            </div>
            </div><br>

            <!-- Button to trigger the second modal -->
            <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
              Get Involved
            </button>

            <!-- Modal 2 -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content" >
                  <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <div class="row mt-5">
                        <div class="col-12 wow fadeInLeft">

                          <form class="modal-form" action="{{ route('involved') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p> Free Cottage Timeshares to Harambee Members</p>

                            @if ($errors->any())
                             <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                @endforeach
                             </ul>
                            </div>
                            @endif

                            <!-- Name and Email Address (1st Row) -->
                            <div class="form-row">
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="name">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full name" value="{{ old('name') }}">
                                @error('name')
                                  <p class="alert alert-danger py-0">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="email">Email Address</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email address.." value="{{ old('email') }}">
                                @error('email')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>
                            <!-- Phone and Country (2nd Row) -->
                            <div class="form-row">
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="phone">Phone</label>
                                <input  type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone.." value="{{ old('phone') }}">
                                @error('phone')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="country">Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Kenya.." value="{{ old('country') }}">
                                @error('country')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>
                            <!-- ID Number and Age (3rd Row) -->
                            <div class="form-row">
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="idNumber">ID/Passport Number</label>
                                <input type="text" class="form-control @error('idNumber') is-invalid @enderror" id="idNumber" name="idnumber" placeholder="ID/Passport Number.." value="{{ old('idNumber') }}">
                                @error('idNumber')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="age">Age</label>
                                <input  type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Age.." value="{{ old('age') }}">
                                @error('age')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                    <label  style="color: greenyellow"  for="passport">ID photo both sides</label>
                                    <input type="file" class="form-control-file @error('passport') is-invalid @enderror" id="idphoto" name="idphoto">
                                    @error('passport')
                                      <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group col-12 col-sm-6">
                                    <label style="color: greenyellow" for="selectOption">Category</label>
                                    <select class="form-control" id="selectOption" name="select">
                                      <option value="" selected disabled>--Select--</option>
                                      <option value="Fainancial_supporter">Financial supporter</option>
                                      <option value="Fainancial_supporter">Financial supporter</option>
                                      <option value="Land_ownwe">Others</option>
                                      <!-- Add more options as needed -->
                                    </select>
                                  </div>
                              </div>

                            <!-- Passport (4th Row) -->
                            <div class="form-row">
                              <div class="form-group col-12 col-sm-6">
                                <label  style="color: greenyellow"  for="passport">Passport (Image)</label>
                                <input type="file" class="form-control-file @error('passport') is-invalid @enderror" id="passport" name="passport_image">
                                @error('passport')
                                  <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                              </div>

                            </div>

                            <!-- Select Option (5th Row) -->
                            <div class="form-row">

                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div><br>

            <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">
                Job applicaton
              </button>

              <!-- Modal 2 -->
              <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content" >
                    <div class="">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <div class="row mt-5">
                          <div class="col-12 wow fadeInLeft">
                            <form class="modal-form" action="{{ route('job') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              @if ($errors->any())
                              <div class="alert alert-danger">
                              <ul>
                                 @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                             </div>
                             @endif
                              <p> </p>

                              <!-- Name and Email Address (1st Row) -->
                              <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="name">Full Name</label>
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full name" value="{{ old('name') }}">
                                  @error('name')
                                    <p class="alert alert-danger py-0">{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="email">Email Address</label>
                                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email address.." value="{{ old('email') }}">
                                  @error('email')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>
                              </div>

                              <!-- Phone and Country (2nd Row) -->
                              <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="phone">Phone</label>
                                  <input  type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone.." value="{{ old('phone') }}">
                                  @error('phone')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="country">Country</label>
                                  <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Kenya.." value="{{ old('country') }}">
                                  @error('country')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>
                              </div>

                              <!-- ID Number and Age (3rd Row) -->
                              <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="idNumber">ID/Passport Number</label>
                                  <input type="text" class="form-control @error('idNumber') is-invalid @enderror" id="idNumber" name="idnumber" placeholder="ID/Passport Number.." value="{{ old('idNumber') }}">
                                  @error('idNumber')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="age">Age</label>
                                  <input  type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Age.." value="{{ old('age') }}">
                                  @error('age')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-12 col-sm-6">
                                      <label  style="color: greenyellow"  for="passport">ID photo both sides</label>
                                      <input type="file" class="form-control-file @error('passport') is-invalid @enderror" id="passport" name="idphoto">
                                      @error('passport')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                      @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                      <label style="color: greenyellow" for="selectOption"> Job Category</label>
                                      <select class="form-control" id="selectOption" name="select">
                                        <option value="" selected disabled>--Select--</option>
                                        <option value="option1">Masonry</option>
                                        <option value="option2">Carpentry</option>
                                        <option value="option2">Security</option>
                                        <option value="option2">Store Keeping</option>
                                        <option value="option2">Chef</option>
                                        <option value="option2"></option>
                                        <!-- Add more options as needed -->
                                      </select>
                                    </div>
                                </div>

                              <!-- Passport (4th Row) -->
                              <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                  <label  style="color: greenyellow"  for="passport">Passport (Image)</label>
                                  <input type="file" class="form-control-file @error('passport') is-invalid @enderror" id="passport_image" name="passport_image">
                                  @error('passport')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                  @enderror
                                </div>

                              </div>

                              <!-- Select Option (5th Row) -->
                              <div class="form-row">

                              </div>

                              <!-- Submit Button -->
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div><br>


            <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
                Contact Us
              </button>

            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content" style="height: 80%">
                    <div class="">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <p style="color: greenyellow">Tell us what you think</p>
                      @include('user.appointment')
                    </div>
                  </div>
                </div>
              </div>

              @include('user.footer')
              @include('user.script')

</body>
</html>
