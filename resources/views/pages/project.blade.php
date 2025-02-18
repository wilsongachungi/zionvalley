@section('css')
<style>
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
</style>
@endsection

<x-base-layout>
    <br>
    <h5 class="welcome-text">Projects</h5>
    <div class="homepage">
        <div id="carouselExample" class="carousel slide carousel-fade bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0" src="../assets/img/1 cottage UG.jpg" alt="Image 1"
                        style="height: 400px;">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>

                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/3 cottage UG.jpg" alt="Image 2"
                        style="height: 400px;">
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
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/12a.jpg" alt="Image 3"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/decking.jpg" alt="Image 3"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/66.jpg" alt="Image 3"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Treehouse33.jpg" alt="Image 3"
                        style="height: 400px;">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">

                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/7.jpg" alt="Image 3"
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
        </div>

        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: antiquewhite;">
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
            </div>
            <div class="green-tint" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
            <p class="line-height-1.5 "
                style="font-size: 1.2em; margin-bottom: 10px; position: relative; text-align: center; align-item:center">
                A unique and sustainable development growth project. <br>
                A leisure and nature park, activity center, and resort destination. <br>
                Education Training and exhibit demonstrations of eco engineering technologies. <br>
                Like a permanent showground, Smaller and with accommodations. <br>
            </p>
        </div>
        <div class="container">
            <div class="center">
                <h4>Current Projects</h4>
            </div>
            <div id="carouselOngoingProject" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselOngoingProject" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselOngoingProject" data-slide-to="1"></li>
                    <li data-target="#carouselOngoingProject" data-slide-to="2"></li>
                    <li data-target="#carouselOngoingProject" data-slide-to="3"></li>
                    <li data-target="#carouselOngoingProject" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/Cottage Rendered 1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/main.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/main2.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Cottage Rendered 2.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Cottage Rendered 3.jpg" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselOngoingProject" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselOngoingProject" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="center">
                <h4>Future Projects</h4>
            </div>
            <div id="carouselInspirationalProjects" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselInspirationalProjects" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="1"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="10"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="11"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="3"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="4"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="5"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="6"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="7"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/Treehouse Tweaked.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/HandRail Tree Branches 3.JPG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/handrail1.jpg" alt="15">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/handrail2.JPG" alt="16">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/zion river side.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/round decking.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/jungle house side deck.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/jungle hopuse deck.jpg" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/jungle house side deck.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/decking22.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/safari.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/ziplining2.jpg" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselInspirationalProjects" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselInspirationalProjects" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="center">
                <h4>Project Inspirations</h4>
            </div>
            <div id="accordion">

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo"
                                style="color: greenyellow; text-decoration: none;">
                                Romantic Cottages
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 2 -->
                            <div id="carouselInspirationalProjects2" class="carousel slide carousel-fade" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/5 cottage.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/34 cottage.JPG"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/44 cottage.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/cottage 1j.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/cottageee.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/moss roof cottage.jpg"
                                            alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/New1.jpeg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/New2.jpeg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/New3.jpeg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/New4.jpeg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/cottage example.jpg"
                                            alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/cottage 8a.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/cottage 4hf.jpg"
                                            alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Cottage121.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <!-- Carousel navigation controls -->
                                <a class="carousel-control-prev" href="#carouselInspirationalProjects2" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselInspirationalProjects2" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End of Carousel inside collapsible item 2 -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree"
                                style="color: greenyellow; text-decoration: none;">
                                Guarden Furniture
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 3 -->
                            <div id="carouselInspirationalProjects3" class="carousel slide carousel-fade" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/5.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/6.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/6a.jpg" alt="4 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/11.jpg" alt="5 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/21.jpg" alt="6 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/21b.jpg" alt="7 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Mugumo Hollow Trunk.jpeg"
                                            alt="8 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/44.jpg" alt="9 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/46.jpg" alt="10 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/222.jpg" alt="11 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/22.jpg" alt="12 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/6c.jpg" alt="13 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/6d.jpg" alt="14 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/29 cottage.jpg" alt="15 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/living chainlink round tube.jpg"
                                            alt="16 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/living chainlink fence 2.jpg"
                                            alt="17 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/6d.jpg"
                                            alt="18 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/43.jpg"
                                            alt="19 slide">
                                    </div>

                                </div>
                                <!-- Carousel navigation controls -->
                                <a class="carousel-control-prev" href="#carouselInspirationalProjects3" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselInspirationalProjects3" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseTwo"
                                style="color: greenyellow; text-decoration: none;">
                                Hillside Cottage
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 2 -->
                            <div id="carouselInspirationalProjects4" class="carousel slide carousel-fade" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/1 slope.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/2 slope.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/3 slope.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/4 slope.jpg" alt="4 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/5 slope.jpg" alt="5 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/17 slope house.jpg"
                                            alt="6 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/22 slope house.jpg"
                                            alt="7 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/19 slope.jpg" alt="8 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/9 slope.jpg" alt="9 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/10 slope.jpg" alt="10 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/11 slope.jpg" alt="11 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/12 slope.jpg" alt="12 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/13 slope.jpg" alt="13 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/14 slope.jpg" alt="14 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/15 slope.jpg" alt="15 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/20 slope.jpg" alt="16 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/21 slope.jpg" alt="17 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/25 slope.jpg" alt="18 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/26 slope.jpg" alt="19 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/27 slope.jpg" alt="20 slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/28 slope.jpg" alt="21 slide">
                                    </div>
                                </div>
                                <!-- Carousel navigation controls -->
                                <a class="carousel-control-prev" href="#carouselInspirationalProjects4" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselInspirationalProjects4" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End of Carousel inside collapsible item 2 -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseTwo"
                                style="color: greenyellow; text-decoration: none;">
                                Treehouse and Decking
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 2 -->
                            <div id="carouselInspirationalProjects5" class="carousel slide carousel-fade" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/32 cottage.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/33 cottage.jpg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/111.jpg" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Treehouse.4.jpg"
                                            alt="Forth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Treehouse Tweaked.jpg"
                                            alt="fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Treehouse 44.jpg"
                                            alt="sixth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/tree.jpg" alt="seventh slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Jungle 2.jpg" alt="eith slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Jungle 3.jpg" alt="nineth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Jungle 4.jpg" alt="tenth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/tree deck.jpg"
                                            alt="eleventh slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/decking.1.jpg"
                                            alt="twelvefth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/decking.jpg"
                                            alt="thirteenth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/decking1a.jpg"
                                            alt="fourteenth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/decking22.jpg"
                                            alt="Fiveteenth slide">
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carouselInspirationalProjects5" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselInspirationalProjects5" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End of Carousel inside collapsible item 2 -->
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne"
                                style="color: greenyellow; text-decoration: none;">
                                underground
                            </button>

                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 1 -->
                            <div id="carouselInspirationalProjects1" class="carousel slide carousel-fade" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/restaurant.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/Real Village.jpeg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/22 cottage UG.JPG"
                                            alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/17 cottage UG.jpg"
                                            alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/6 cottage UG.jpg"
                                            alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/12 cottage UG.jpg"
                                            alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/13 cottage UG.jpg"
                                            alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/25 cottage UG.JPG"
                                            alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/33 cottage.jpg" alt="Fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/37 cottage.jpg" alt="Fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/28 cottage.jpg" alt="Fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/31 cottage.jpg" alt="Fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/25 cottage.jpg" alt="Fifth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/20 cottage UG.jpg"
                                            alt="Fifth slide">
                                    </div>
                                </div>
                                <!-- Carousel navigation controls -->
                                <a class="carousel-control-prev" href="#carouselInspirationalProjects1" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselInspirationalProjects1" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- End of Carousel inside collapsible item 1 -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</x-base-layout>
