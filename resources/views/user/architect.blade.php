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

        .carousel-item img {
            height: 300px;
            /* Adjust the height as needed */
            object-fit: cover;
        }

        p {
            color: antiquewhite;
        }

        .intro-container {
            text-align: center;
            padding: 50px;

            color: antiquewhite;
            margin-top: 20px;
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

        .card {
            border: none;
        }

        .card-header {
            background-color: rgba(0, 20, 0);
            border: none;
        }

        .card-body {
            background-color: rgba(0, 20, 0);
            border: none;
        }



        @media screen and (max-width: 600px) {
            h3 {
                font-size: 13px;
            }

        }

        .custom-carousel-item {
            position: absolute;
            text-align: center;
            background-color: rgba(3, 79, 3, 0.5);
            padding: 0px;
        }

        .custom-carousel-text {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .center {
            text-align: center;
        }

        .welcome-text {
            display: none;
            color: antiquewhite;
            text-align: center;
            position: fixed;
            top: 20px;
            left: 55%;
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

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .full-page-iframe {
            position: fixed;
            top: 0;
            left: 0;
            width: 180%;
            height: 150%;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.6);
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10000;
        }

        .center {
            text-align: center;
        }

        .center img {
            width: 50%;
            height: auto;
            display: inline-block;
        }

        @media (max-width: 600px) {
            .center img {
                width: 100%;
                height: auto;
            }
        }
    </style>
@endsection

<x-base-layout>
    <br>
    <h5 class="welcome-text">Architects</h5>
    <div class="home">

        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">

                    <img class="img1 pb-0 mb-0 " style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/solar.jpg" alt="Image 1">
                </div>

                <div class="carousel-item text-center">

                    <img class="img1 pb-0 mb-0 d-block" style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/image035.JPG" alt="Image 2">
                </div>

                <div class="carousel-item text-center">

                    <img class="img1 pb-0 mb-0 d-block" style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/Luscome Lower2.PNG" alt="Image 13">
                </div>
                <div class="carousel-item text-center">

                    <img class="img1 pb-0 mb-0 d-block" style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/Wood Ibiza1.JPG" alt="Image 3">
                </div>
                <div class="carousel-item text-center">

                    <img class="img1 pb-0 mb-0 d-block" style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/4 opatiooct.jpg" alt="Image 3">
                </div>
                <div class="carousel-item text-center">

                    <img class="img1 pb-0 mb-0 d-block" style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/2 Patio Panorama.PNG" alt="Image 3">
                </div>
                <div class="carousel-item text-center">

                    <img class="img1 pb-0 mb-0 d-block" style="height:100vh; object-fit:cover; object-position:center"
                        src="../assets/img/1 Yello Drive.PNG" alt="Image 3">
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
        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
            </div>
            <h3 class="text-center mb-4">
                </h2>
        </div>

        <br>
        <div class="container">
            {{-- <section id="accommodation" class="content">
                <div class="row">
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/1 Yello Drive.PNG" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Drive Way</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/2 Patio Panorama.PNG" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">cCottage</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/Kitchen South.PNG" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Kitchen South</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/Bathroom.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Bathroom</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/Kitchen1.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">Kitchen</div>
                    </div>
                    <div class="col-12 col-md-4 single-accommodation">
                        <img src="../assets/img/8 Patio Doors.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="service-desc pl-2 pb-2">River and Waterfall.</p>
                        </div>
                    </div>
                </div>
            </section> --}}

            <div class="center">
                <h4>Professional history</h4>
            </div>
            <div id="carouselProjects" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselProjects" data-slide-to="12" class="active"></li>
                    <li data-target="#carouselProjects" data-slide-to="13"></li>
                    <li data-target="#carouselProjects" data-slide-to="14"></li>
                    <li data-target="#carouselProjects" data-slide-to="15"></li>
                    <li data-target="#carouselProjects" data-slide-to="16"></li>
                    <li data-target="#carouselProjects" data-slide-to="17"></li>
                    <li data-target="#carouselProjects" data-slide-to="18"></li>
                    <li data-target="#carouselProjects" data-slide-to="19"></li>
                    <li data-target="#carouselProjects" data-slide-to="20"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/solar.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Wood Ibiza1.JPG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/image035.JPG" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Luscome Lower2.PNG" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Wood Ibiza2.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Craig Manifold 2.jpg" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Luscome Upperok.PNG" alt="Fifth slide">
                    </div>
                    {{-- <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/" alt="Fifth slide">
                    </div> --}}
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselProjects" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselProjects" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="center">
                <h4>Self built home UK</h4>
            </div>
            <div id="carouselInspirationalProjects" class="carousel slide" data-ride="carousel"
                data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselInspirationalProjects" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="1"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="2"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="3"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="4"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="5"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="6"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="7"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/Back Bedroom.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/6 Back Steps Up.webp" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/7 Back Steps.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/4 opatiooct.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Kitchen Logs.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/IMB Living Room.jpg" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/IMG_20180520_120510.jpg" alt="seven slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/8 Patio Doors.jpg" alt="eigth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/7 Back Steps.jpg" alt="nineth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/2 Patio Panorama.PNG" alt="Fifth slide">
                    </div>
					<div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Back Bed 2.jpg" alt="Fifth slide">
                    </div>
					<div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Bathroom.jpg" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselInspirationalProjects" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselInspirationalProjects" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        <div class="center">
            <h3>Architectures Experience</h3>
            <img src="../assets/img/kamau p1.png" alt="">
            <img src="../assets/img/kamau p2.png" alt="">
            <img src="../assets/img/kamau p3.png" alt="">
            <img src="../assets/img/kamau p4.png" alt="">
            <div> <a href="https://web.archive.org/web/20190815121115/http://www.tmsthermalstore.com/testimonials.php">for
                    more about the architect</a>
            </div> <br> <br>
            <div class="center">
                <h3>Installation Manual</h3>
                <img src="../assets/img/kamau thermal1.png" alt="">
                <img src="../assets/img/kamau thermal2.png" alt="">
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
