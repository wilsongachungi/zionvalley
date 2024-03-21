<style>
    
</style>
<x-base-layout>
   <br>
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


    @if (Auth::check())
    @else
        <button style="margin-left: 30px" type="button" class="btn btn-primary">
            <a href="{{ route('register') }}" style="color: white; text-decoration: none;">Register</a>
        </button>
        <br>
    @endif


    <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
        Get Involved
    </button>

    <!-- Modal 2 -->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mt-5">
                        <div class="col-12 wow fadeInLeft">

                            <form id="myForm" class="modal-form" action="{{ route('involved') }}" method="POST"
                                enctype="multipart/form-data">
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
                                        <label style="color: greenyellow" for="name">Full Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="{{ $user->name ?? 'Full name' }}"
                                            value="{{ old('name', auth()->user()->name ?? '') }}">
                                        @error('name')
                                            <p class="alert alert-danger py-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="email">Email Address</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email"
                                            placeholder="{{ $user->email ?? 'Email address..' }}"
                                            value="{{ old('email', auth()->user()->email ?? '') }}">
                                        @error('email')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone and Country (2nd Row) -->
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="phone">Phone</label>
                                        <input type="number"
                                            class="form-control @error('phone') is-invalid @enderror" id="phone"
                                            name="phone" placeholder="{{ $user->phone ?? 'Phone' }}"
                                            value="{{ old('phone', auth()->user()->phone ?? '') }}">
                                        @error('phone')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="country">Country</label>
                                        <input type="text"
                                            class="form-control @error('country') is-invalid @enderror" id="country"
                                            name="country" placeholder="Kenya.." value="{{ old('country') }}">
                                        @error('country')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- ID Number and Age (3rd Row) -->
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="idNumber">ID/Passport Number</label>
                                        <input type="text"
                                            class="form-control @error('idNumber') is-invalid @enderror"
                                            id="idNumber" name="idnumber" placeholder="ID/Passport Number.."
                                            value="{{ old('idNumber') }}">
                                        @error('idNumber')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="age">Age</label>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror"
                                            id="age" name="age" placeholder="Age.."
                                            value="{{ old('age') }}">
                                        @error('age')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    {{-- <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="passport">ID photo both sides</label>
                                        <input type="file"
                                            class="form-control-file @error('passport') is-invalid @enderror"
                                            id="idphoto" name="idphoto">
                                        @error('passport')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="selectOption">Category</label>
                                        <select class="form-control" id="selectOption" name="select">
                                            <option value="" selected disabled>--Select--</option>
                                            <option value="land_owner">Land Owner</option>
                                            <option value="Fainancial_supporter">Financial supporter</option>
                                            <option value="other">Others</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                </div>

                                <!-- Passport (4th Row) -->
                                {{-- <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="passport">Passport (Image)</label>
                                        <input type="file"
                                            class="form-control-file @error('passport') is-invalid @enderror"
                                            id="passport" name="passport_image">
                                        @error('passport')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div> --}}

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


    <button id="buyHarambeeBtn" style="margin-left: 30px" type="button" class="btn btn-primary"
        data-toggle="tooltip" data-placement="top" data-html="true"
        @if (!Auth::check()) disabled title="<b>Please log in to access this feature</b>" @endif>
        Buy Harambee
    </button>





    <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal1Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="height: 100%; width:100%">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <P>Please note that you have to buy 500+ harambees as shares for the first time

                        You cannot sell harambees before maturity i.e before 6 months which will have been increased by
                        10%
                    </P>
                    <hr>
                    <p>Account number: 1245639...* <br>
                        PayBill: 1245...* <br>
                        Account:1256..*
                    </p>
                    <a href=" {{ route('info') }}" class="btn btn-primary">Profile</a>
                </div>
            </div>
        </div>
    </div><br>

    <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#modal4">
        Job applicaton
    </button>

    <!-- Modal 2 -->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mt-5">
                        <div class="col-12 wow fadeInLeft">
                            <form class="modal-form" action="{{ route('job') }}" method="POST"
                                enctype="multipart/form-data">
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
                                        <label style="color: greenyellow" for="name">Full Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name"
                                            placeholder="{{ $user->name ?? 'Full name' }}"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <p class="alert alert-danger py-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="email">Email Address</label>
                                        <input type="text"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" placeholder="{{ $user->email ?? 'Email address..' }}"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone and Country (2nd Row) -->
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="phone">Phone</label>
                                        <input type="number"
                                            class="form-control @error('phone') is-invalid @enderror" id="phone"
                                            name="phone" placeholder="Phone.." value="{{ old('phone') }}">
                                        @error('phone')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="country">Country</label>
                                        <input type="text"
                                            class="form-control @error('country') is-invalid @enderror"
                                            id="country" name="country" placeholder="Kenya.."
                                            value="{{ old('country') }}">
                                        @error('country')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- ID Number and Age (3rd Row) -->
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="idNumber">ID/Passport Number</label>
                                        <input type="text"
                                            class="form-control @error('idNumber') is-invalid @enderror"
                                            id="idNumber" name="idnumber" placeholder="ID/Passport Number.."
                                            value="{{ old('idNumber') }}">
                                        @error('idNumber')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="age">Age</label>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror"
                                            id="age" name="age" placeholder="Age.."
                                            value="{{ old('age') }}">
                                        @error('age')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="passport">ID photo both sides</label>
                                        <input type="file"
                                            class="form-control-file @error('passport') is-invalid @enderror"
                                            id="passport" name="idphoto">
                                        @error('passport')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div> --}}
                                <div class="form-group col-12 col-sm-6">
                                    <label style="color: greenyellow" for="selectOption"> Job Category</label>
                                    <select class="form-control" id="selectOption" name="select">
                                        <option value="" selected disabled>--Select--</option>
                                        <option value="Masonry">Masonry</option>
                                        <option value="Carpentry">Carpentry</option>
                                        <option value="Security">Security</option>
                                        <option value="Store Keeping">Store Keeping</option>
                                        <option value="Chef">Chef</option>
                                        <option value="Preservation">Tree Preservation</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                        </div>

                        <!-- Passport (4th Row) -->
                        {{-- <div class="form-row">
                                    <div class="form-group col-12 col-sm-6">
                                        <label style="color: greenyellow" for="passport">Passport (Image)</label>
                                        <input type="file"
                                            class="form-control-file @error('passport') is-invalid @enderror"
                                            id="passport_image" name="passport_image">
                                        @error('passport')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div> --}}
                        <div class="form-row">
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 10px">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><br>

    <button style="margin-left: 30px" type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#modal3">
        Contact Us
    </button>

    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label"
        aria-hidden="true">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buyHarambeeBtn = document.getElementById('buyHarambeeBtn');

            if (buyHarambeeBtn) {
                buyHarambeeBtn.addEventListener('click', function() {

                    if (!{!! json_encode(Auth::check()) !!}) {

                        return false;
                    }
                    $('#modal9').modal('show');
                });
            }
        });
    </script>


</x-base-layout>
