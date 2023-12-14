<x-base-layout>
    <style>
		.container{
			align-items: center;
			align-content: center;
		}
        .filter-button {
			flex-wrap: wrap;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        button {
            padding: 4px 14px;
            font-size: 18px;
            background: #fff;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            cursor: pointer;
        }

        .active1 {
            background-color: #4070f4;
        }

        .filterble-cards1 {
            display: flex;
			margin-top: 25px;
			align-items: center;
			align-content: center;
			gap:20px;
			flex-wrap: wrap;
        }

        .card1 {
			flex-grow:1;
            flex-basis: 300px;
            padding: 3px;
            border-radius: 8px;
			align-items: center;
			align-content: center;
			margin-left: 10px;
			margin-right: 10px;

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
		.card1-title{
			font-size:20px;
			font-weight:500;
			color:#fff;
		}
		.card1-text{
			font-size: 18px;
			color: #fff;
		}
    </style>

    {{-- <div class="page-hero bg-image">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead" style="color:  black; text-size:25px"></span>
                <h2 class="display-4"><strong style="color:  white">Projects</strong></h2>
            </div>
        </div>
    </div> --}}


    <div class="container">
        <div class="filter-button">
            <button class="active1" data-name="all">Show all</button>
            <button data-name="underground">Underground</button>
            <button data-name="river">River</button>
            <button data-name="slopes">Slopes</button>
            <button data-name="cave">Caves</button>
        </div>
    </div>

    <div class="filterble-cards1">
        <div class="card1" data-name="underground">
            <img src="../assets/img/10 slope.jpg" alt="Image 1">
            {{-- <div class="card1-body">
                <h6 class="card1-title">Underground</h6>
                <p class="card1-text">Lorem ipsum dolor ..</p>
            </div> --}}
        </div>
		<div class="card1" data-name="river">
            <img src="../assets/img/10 slope.jpg" alt="river">
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
    </div>


	<script>
		const filterButtons = document.querySelectorAll(".filter_button")
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
