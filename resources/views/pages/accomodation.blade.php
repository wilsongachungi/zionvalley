@section('css')
    <style>
        img {
            border-radius: 4px;
        }

        p {
            color: antiquewhite;
        }

        .intro-container {
            text-align: center;
            padding: 50px;
            background-color: #021e32;
            color: antiquewhite;
            margin-top: 20px;
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
                padding-bottom: 56.25%; /* 16:9 aspect ratio (9 / 16 = 0.5625) */
                overflow: hidden;
            }

            .video-container video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

    </style>
@endsection

<x-base-layout>
    <div class="accomodation">
        <div class="page-hero bg-image">
            <div class="hero-section">
                <div class="container text-center wow zoomIn"
                    style="background-color:  rgba(3, 79, 3, 0.5); padding: 10px;">
                    <div class=" line-height-2" style="text-align: center">
                        <h4>Zion Valley Harambee Village <br>
                            Join for as little as 1k
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-container"
            style="background-image: url('../assets/img/Capture13.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: antiquewhite;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
            </div>
            <ul style="position: relative; z-index: 1;">
                <li>A unique and sustainable development growth project.</li>
                <li>A leisure and nature park, activity center, and resort destination.</li>
                <li>Education Training and exhibit demonstrations of eco engineering technologies.</li>
                <li>Like a permanent showground, Smaller and with accommodations.</li>
            </ul>
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

            
        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
            </div>
            <h2 class="text-center mb-4">Free Accommodation to Harambee owner</h2>
            <p style="font-size: 1.2em;
            margin-bottom: 10px;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis beatae non eligendi
                    possimus maxime saepe expedita quam eius. Quas, nihil quo assumenda quod quibusdam
                    A menber to own One romantic cottage one weekend each and every year - two nights per year - For
                    every 25k Tree Certificates Held
            </p>
        </div>

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
                     
        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
            </div>
            <h2 class="text-center mb-4">Free Accommodation to Harambee owner</h2>
            <p style="font-size: 1.2em;
            margin-bottom: 10px;"> 
                    A menber to own One romantic cottage one weekend each and every year - two nights per year - For
                    every 25k Tree Certificates Held
            </p>
        </div>
        <div> <br>
        
        <div class="video-container">
        <h4>The Exterior</h4> <br>
            <video width="420" height="340" controls autoplay>
                <source src="../assets/img/exterior.mp4" type="video/mp4">
            </video>
        </div>
        </div>
        <br>
        <div class="video-container">
        <h4>The Interior</h4> <br>
            <video width="420" height="340" controls autoplay>
                <source src="../assets/img/interior.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</x-base-layout>
