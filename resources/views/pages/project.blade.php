@section('css')
    <style>
        .container {
            align-items: center;
            align-content: center;
        }

        .filter-buttons {
            flex-wrap: wrap;
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: 30px;
        }

        button {
            padding: 2px 8px;
            font-size: 15px;
            background: #fff;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            color: green;
            border-radius: 2px;
        }

        button:hover {
            color: purple;
            transition: 0.5s ease-in;
        }

        .active {
            background-color: rgb(215, 212, 212);
        }

        .filterble-cards1 {
            display: flex;
            margin-top: 25px;
            align-items: center;
            align-content: center;
            gap: 20px;
            flex-wrap: wrap;

        }

        .card1 {
            flex-grow: 1;
            flex-basis: 300px;
            padding: 3px;
            border-radius: 8px;
            align-items: center;
            align-content: center;
            margin-left: 10px;
            margin-right: 10px;
            box-shadow: 0 4px -1px rgba(0, 0, 0, 0.5);

        }

        .card1:hover {
            transform: scale(1.1);
            transition: .5s ease-in-out;
        }

        .card1.hide {
            display: none;
        }

        .card1 img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;

        }

        .card1-body {
            padding: 15px 20px 20px;
        }

        .card1-title {
            font-size: 20px;
            font-weight: 500;
            color: #fff;
        }

        .card1-text {
            font-size: 18px;
            color: #fff;
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
    </style>
@endsection

<x-base-layout>
    <div class="intro-container"
        style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: antiquewhite;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
        </div>
        <ul style="position: relative; z-index: 1;">
            <li>A unique and sustainable development growth project.</li>
            <li>A leisure and nature park, activity center, and resort destination.</li>
            <li>Education Training and exhibit demonstrations of eco engineering technologies.</li>
            <li>Like a permanent showground, Smaller and with accommodations.</li>
        </ul>
    </div>


    <div class="container" style="margin-top: 10px;content-align:center">
        <div class="filter-buttons">
            <button data-name="underground">Underground</button>
            <button data-name="river">Cottage</button>
            <button data-name="slopes">Slopes</button>
            <button data-name="cave">Tree Planting</button>
            {{-- <button class="active" data-name="all">Show all</button> --}}
        </div>
    </div>

    <div class="filterble-cards1">
        <div class="card1" data-name="underground">
            <img src="../assets/img/16 cottage UG.jpg" alt="Image 1">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="underground">
            <img src="../assets/img/3 cottage UG.jpg" alt="Image 1">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="underground">
            <img src="../assets/img/26 cottage.jpg" alt="Image 1">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="underground">
            <img src="../assets/img/25 cottage.jpg" alt="Image 1">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="river">
            <img src="../assets/img/10 cottage.jpg" alt="river">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="river">
            <img src="../assets/img/31 cottage.jpg" alt="river">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="river">
            <img src="../assets/img/29 cottage.jpg" alt="river">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="river">
            <img src="../assets/img/12 cottage.jpg" alt="river">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="slopes">
            <img src="../assets/img/HandRail.JPG" alt="slopes">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="slopes">
            <img src="../assets/img/26 slope.jpg" alt="slopes">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="slopes">
            <img src="../assets/img/28 slope.jpg" alt="slopes">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="slopes">
            <img src="../assets/img/10 slope.jpg" alt="slopes">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
        <div class="card1" data-name="cave">
            <img src="../assets/img/10 slope.jpg" alt="cave">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
    </div>


    <script>
        const filterButtons = document.querySelectorAll(".filter-buttons button");
        const filterbleCards = document.querySelectorAll(".filterble-cards1 .card1");

        const filterCards = e => {
            document.querySelector(".active").classList.remove("active");
            e.target.classList.add("active");

            filterbleCards.forEach(card1 => {
                card1.classList.add("hide");

                if (card1.dataset.name === e.target.dataset.name || e.target.dataset.name === "all") {
                    card1.classList.remove("hide");
                }
            })
        };

        filterButtons.forEach(button => button.addEventListener("click", filterCards));
    </script>



    {{-- <div class="projects">
        <div class="page-hero bg-image">
            <div class="hero-section">
                <div class="container text-center wow zoomIn">
                    <span class="subhead" style="color:  black; text-size:25px"></span>
                    <h2 class="display-4"><strong style="color:  white">Projects</strong></h2>
                </div>
            </div>
        </div>
        <div class="container text-center content">
            <h4 class="pb-5">Ongoing Projects</h4>
            <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col img-box">
                                <img src="../assets/img/10 slope.jpg" class="w-100 h-100" alt="Image 1"
                                    data-lightbox="image-gallery">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/13 slope.jpg" class="w-100 h-100" alt="Image 2"
                                    data-lightbox="image-gallery">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/17 slope.jpg" class="w-100 h-100" alt="Image 3"
                                    data-lightbox="image-gallery">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col img-box">
                                <img src="../assets/img/21 slope.jpg" class="w-100 h-100" alt="Image 4"
                                    data-lightbox="image-gallery">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/23 slope.jpg" class="w-100 h-100" alt="Image 5"
                                    data-lightbox="image-gallery">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/17 slope.jpg" class="w-100 h-100" alt="Image 6"
                                    data-lightbox="image-gallery">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/17 slope.jpg" class="w-100 h-100" alt="Image 6"
                                    data-lightbox="image-gallery">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="custom-carousel-control custom-carousel-prev" type="button"
                    data-bs-target="#imageCarousel" data-bs-slide="prev">
                    &lt;
                </button>
                <button class="custom-carousel-control custom-carousel-next" type="button"
                    data-bs-target="#imageCarousel" data-bs-slide="next">
                    &gt;
                </button>
            </div>
        </div>
        <div class="container mb-5">
            <h4 class="pb-5 text-center">Future Projects</h4>
            <div id="imageCarousel2" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner d-md-flex flex-md-column">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col img-box">
                                <img src="../assets/img/10 slope.jpg" class="w-100 h-100" alt="Image 1">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/13 slope.jpg" class="w-100 h-100" alt="Image 2">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/17 slope.jpg" class="w-100 h-100" alt="Image 3">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col img-box">
                                <img src="../assets/img/21 slope.jpg" class="w-100 h-100" alt="Image 4">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/23 slope.jpg" class="w-100 h-100" alt="Image 5">
                            </div>
                            <div class="col img-box">
                                <img src="../assets/img/17 slope.jpg" class="w-100 h-100" alt="Image 6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-base-layout>
