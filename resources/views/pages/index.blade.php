<x-base-layout>
	@auth
    <p style="color: antiquewhite;">Welcome, {{ Auth::user()->name }}!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
	<a href="{{ route('profile.show') }}" style="color: antiquewhite;">Change Password</a>
@else
    <!-- Add login or register links here if needed -->
@endauth
    <style>
        p {
            color: antiquewhite;
        }
    </style>
    <div class="homepage">
        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <img class="img1 pb-0 mb-0" src="../assets/img/IMG_20181226_140601.jpg" alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Community River</div>
                </div>
                <div class="carousel-item flex">
                    <img class="img1 pb-0 mb-0" src="../assets/img/safari.jpg" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Nature Walk</div>
                </div>
                <div class="carousel-item flex">
                    <img class="img1 pb-0 mb-0" src="../assets/img/ziplining2.jpg" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Zip lining</div>
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
        <div class="container content">
            <h3 class="text-center title h3">Zion Valley: A Nature Oasis for Relaxation and Adventure</h3>
            <div class="row section-1">
                <div class="col-12 col-md-4">
                    <img class="img-fluid w-100 pb-0" src="../assets/img/25 cottage UG.jpg" alt="">
                </div>
                <div class="col-md-8 desc">
                    <div class="text-justify line-height-2">
                        <p>
                            The decision now made – We are leaving the Nairobi concrete hustle and heading north to the
                            Mount Kenya foothills - The excitement begins!
                        </p>
                        <p>
                            With the road gradually rising then twisting curving, right and left like a meandering
                            river.
                            Rising forever through valleys and ever steeper hills, surrounded by lush green verdant
                            growth
                            everywhere!
                            Now and then the steepest drops - a truly exhilarating journey
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-justify line-height-2 mt-4" style="margin-left:30px; margin-right:20px">
        <div class="accordions">
            <div class="accordion" onclick="toggleDiv('div3')">
                <h3 class="float-left text-lg">
                    Continue Reading
                </h3>
                <i class="text-md float-right">&#9660;</i>
            </div>
            <div id="div3" class="text-justify line-height-2 desc">
                <p class="text-justify line-height-2" style:>

                    Twilight descending and a golden glow appearing from behind the far mountain. Dawn arrives just
                    outside
                    Nyeri town, then like a time and long forgotten world, we find ourselves inside Zion Valley –
                    Sitting
                    right there beside an amazing waterfall – WOW!

                </p>
            </div>
            <div class="accordions">
                <div class="accordion" onclick="toggleDiv('div1')">
                    <h3 class="float-left text-lg">
                        Continue Reading
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div1" class="text-justify line-height-2 desc">
                    <p class="text-justify line-height-2" style:>
                        Soothing roars from crashing waters and the world of traffic soon becomes a distant memory. -
                        Peace at last.

                        Energized by lungful’s of pure clean air, we find ourselves wandering down the meandering river
                        side
                        path. Enchanted by the birds, the bees, the flowers and trees, the incredible sceneries bursting
                        with
                        forth with life and abundant growth.
                        Artistic living sofas carved from nature are everywhere, we sit and soak up the sounds and
                        boundless
                        joys of nature.
                    </p>
                </div>
                <div class="accordion" onclick="toggleDiv('div2')">
                    <h3 class="float-left text-lg">
                        Continue Reading
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div2" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
                    <p>One text message and soon our hot meal is delivered by hand to our shaded chosen
                        sofa by the river - Heaven.

                        After some time - seemingly endless time and realizing there is ever more to this adventure,
                        our journey continues.

                        Laughter and the playful splashes of children beckon us to venture and discover three natural
                        swimming
                        pools, exhilarating zip lines, and a vast array of nature-inspired resort activities.

                        Surrounded by so many charming cottages nestled amongst the undulating hills and huge forest
                        trees,
                        we take a moment in our chosen resting place, a romantic secluded marram soil eco lodge and
                        prepare ourselves for the evening ahead.

                        As the sun sets once again, vibrant bars come alive, the stage now set for a night of music,
                        dancing, happy people and an evening filled with experiences.</p>
                </div>
            </div>
        </div>

        @include('layouts.user.partials.services')
        @include('layouts.user.partials.latest')
</x-base-layout>
