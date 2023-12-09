<x-base-layout>
    <div class="homepage">
        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <img class="img1 pb-0 mb-0" src="../assets/img/IMG_20181226_140601.jpg" alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Community River</div>
                </div>
                <div class="carousel-item">
                    <img class="img1 pb-0 mb-0" src="../assets/img/INursery_MG_5866-scaled.jpg" class="d-block w-100"
                        alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Indeginous tree preservation</div>
                </div>
                <div class="carousel-item flex">
                    <img class="img1 pb-0 mb-0" src="../assets/img/safari.jpg" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Nature Walk</div>
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
            <h1 class="text-center title h2">Zion Valley: A Nature Oasis for Relaxation and Adventure</h1>
            <div class="row section-1">
                <div class="col-12 col-md-4">
                    <img class="img-fluid w-100 pb-0" src="../assets/img/HandRail Tree Branches Best.JPG"
                        alt="">
                </div>
                <div class="col-md-8 desc">
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
    </div>

    @include('layouts.partials.services')
    @include('layouts.partials.latest')
</x-base-layout>
