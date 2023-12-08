<x-base-layout>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img1" src="../assets/img/IMG_20181226_140601.jpg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption">
                    <h5></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="img1" src="../assets/img/INursery_MG_5866-scaled.jpg" class="d-block w-100"
                    alt="Image 1">
                <div class="carousel-caption">
                    <h5>Indeginous tree preservation</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img1" src="../assets/img/safari.jpg" class="d-block w-100" alt="Image 1">
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

    <div class="container-fluid page-section">
        <h1 class="text-center mb-5 h2">Zion Valley: A Nature Oasis for Relaxation and Adventure</h1>
        <div class="row px-5">
            <div class="col-4">
                <img class="img-fluid w-100" src="../assets/img/HandRail Tree Branches Best.JPG" alt="">
            </div>
            <div class="col-8 pl-5">
                <div class="text-justify line-height-2">
                    <p>
                        Welcome to Zion Valley Resort, a serene escape enveloped in the natural beauty of majestic
                        mountains and lush greenery. Immerse yourself in a plethora of activities, from
                        invigorating hiking trails and leisurely nature walks to breathtaking waterfall views.
                    </p>
                    <p>
                        Our accommodations range from cozy cabins to spacious suites, each providing a
                        comfortable retreat with unparalleled scenery. Thrill-seekers can indulge in rock
                        climbing and zip-lining, while those seeking relaxation can unwind in our wellness
                        center or savor locally sourced cuisine at our restaurant with panoramic views.
                    </p>
                    <p>
                        Zion Valley Resort invites you to embark on a harmonious journey of enjoyment and
                        rejuvenation in the heart of nature.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.services')
    @include('user.latest')
</x-base-layout>
