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
    background-color: rgba(0, 128, 0, 0.5);
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
</style>
@endsection

<x-base-layout>
    <div class="homepage">
        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
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
                <h4>Ongoing Project</h4>
            </div>
            <div id="carouselOngoingProject" class="carousel slide" data-ride="carousel" data-interval="false">
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
            <div id="carouselInspirationalProjects" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselInspirationalProjects" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="1"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="2"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="3"></li>
                    <li data-target="#carouselInspirationalProjects" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/Treehouse Tweaked.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/handrail1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/zion river side.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/Round decking.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/jungle house side deck.jpg" alt="Fifth slide">
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
                <h4>Inspirational Project</h4>
            </div>
            <div id="accordion">
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
                            <div id="carouselInspirationalProjects1" class="carousel slide" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/13 slope.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/17 slope.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/21 slope.jpg" alt="Third slide">
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
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo"
                                style="color: greenyellow; text-decoration: none;">
                                Field
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 2 -->
                            <div id="carouselInspirationalProjects2" class="carousel slide" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/13 slope.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/17 slope.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/21 slope.jpg" alt="Third slide">
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
                                Nature Walks
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <!-- Carousel inside collapsible item 3 -->
                            <div id="carouselInspirationalProjects3" class="carousel slide" data-ride="carousel"
                                data-interval="false">
                                <!-- Carousel content -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../assets/img/13 slope.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/17 slope.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../assets/img/21 slope.jpg" alt="Third slide">
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
                            <!-- End of Carousel inside collapsible item 3 -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</x-base-layout>