@section('css')
<style>
img {
    border-radius: 4px;
}

p {
    color: antiquewhite;
}



ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

li {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.video-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%;
    /* 16:9 aspect ratio (9 / 16 = 0.5625) */
    overflow: hidden;
}

.video-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.intro-container {
    position: relative;
    color: antiquewhite;
}

.green-tint {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 50, 0, 0.5);
    /* Green with 50% opacity */
}

.welcome-text {
    display: none;
    color: antiquewhite;
    text-align: center;
    position: fixed;
    top: 20px;
    left: 60%;
    transform: translateX(-50%);
    z-index: 1000;
}


@media (max-width: 767px) {
    .welcome-text {
        display: block;
    }
}

@media (min-width: 768px) {
    .welcome-text {
        display: none;
    }
}


</style>
@endsection

<x-base-layout>
    <br>
    <h5 class="welcome-text">Accomodation</h5>
    <div class="home">
        <div id="carouselExample" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0" src="../assets/img/Cottage12.jpg" alt="Image 1" style="height: 400px;">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>

                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/cottage accommodation.jpg"
                        alt="Image 2" style="height: 400px;">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Treehouse Tweaked.jpg" alt="Image 3"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/5 cottage.jpg" alt="Image 4"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/moss roof cottage.jpg" alt="Image 5"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Cottage Rendered 3.jpg" alt="Image 6"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Treehouse33.jpg" alt="Image 7"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/new1.jpeg" alt="Image 8"
                        style="height: 400px;">
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
        </div> <br>
        <!-- <div class="page-hero bg-image">
            <div class="hero-section">
                <div class="container text-center" id="heroContent">
                    <div class="container text-center wow zoomIn"
                        style="background-color: rgba(3, 79, 3, 0.5); padding: 10px;">
                        <div class="line-height-1.5" style="text-align: center">
                            <h4>Zion Valley Harambee Village <br> Join for as little as 1k</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
            </div>

            <p style="font-size: 1.2em;
            margin-bottom: 10px; text-align:center;">
                All cottages to be listed and available online <br>

            </p>
            <h3 class="text-center mb-4">Free Accommodation to Harambee owners</h2>
                <p style="font-size: 1.2em;
            margin-bottom: 10px; text-align:center;">
                    One romantic cottage <br>
                    Two nights per year <br>
                    Each and every year <br>
                    For
                    every 25k of Harambees.
                </p>
        </div>

        <div> <br>

            <div class="video-container">
                <h4>Romantic Cottage Exterior</h4> <br>
                <video width="420" height="340" controls>
                    <source src="../assets/img/exterior.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <br>
        <div class="video-container">
            <h4>Romantic Cottage Interior</h4> <br>
            <video width="420" height="340" controls>
                <source src="../assets/img/interior.mp4" type="video/mp4">
            </video>
        </div>


        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
            </div>
            <h3 class="text-center mb-4">Future Cottages </h2>
                <p style="font-size: 1.2em;
            margin-bottom: 10px;">

                </p>
        </div>

        <div class="container">
            <section id="accommodation" class="content">
                <div class="row">
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/coolplace.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Tranquil view</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/23 slope.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Cool air Breeze</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/25 slope.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Cottages of your choice</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/coolplace2.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Cool place and private for nights</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/13 slope.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Nature experience</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/10 slope.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">>River and Waterfall.</p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="row owl-carousel wow fadeInUp mt-5 carousels" id="doctorSlideshow">
                <div class="item col">
                    <div class="card-doctor">
                        <div class="header">
                            <img class="owl-img" src="../assets/img/10 slope.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="card-doctor">
                        <div class="header">
                            <img class="owl-img" src="../assets/img/13 slope.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="card-doctor">
                        <div class="header">
                            <img class="owl-img" src="../assets/img/17 slope.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="card-doctor">
                        <div class="header">
                            <img class="owl-img" src="../assets/img/21 slope.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="card-doctor">
                        <div class="header">
                            <img class="owl-img" src="../assets/img/23 slope.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="card-doctor">
                        <div class="header">
                            <img class="owl-img" src="../assets/img/17 slope.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <script>
        // Function to trigger zooming animation
        function triggerZoomAnimation() {
            const heroContent = document.getElementById('heroContent');
            heroContent.classList.remove('wow', 'zoomIn');
            void heroContent.offsetWidth; // Trigger reflow to restart the animation
            heroContent.classList.add('wow', 'zoomIn');
        }

        // Function to toggle visibility of hero content
        function toggleHeroContent() {
            const heroContent = document.getElementById('heroContent');
            heroContent.style.display = heroContent.style.display === 'none' ? 'block' : 'none';
        }

        // Initial trigger of zooming animation
        triggerZoomAnimation();

        // Repeat the sequence every 4 seconds
        setInterval(() => {
            toggleHeroContent(); // Hide content
            setTimeout(() => {
                toggleHeroContent(); // Show content
                triggerZoomAnimation(); // Trigger zooming animation
            }, 2000); // Wait for 1 second before showing content again
        }, 4000); // Repeat every 4 seconds
        </script>
</x-base-layout>
