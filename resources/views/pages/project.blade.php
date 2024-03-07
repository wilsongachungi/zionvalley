@section('css')
<style>
        p {
            color: antiquewhite;
        }

        .intro-container {
            text-align: center;
            padding: 50px;

            color: antiquewhite;
            margin-top: 20px;
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
    <div class="homepage"><div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        
                    </div>
                    <img class="img1 pb-0 mb-0" src="../assets/img/IMG_20181226_140601.jpg" alt="Image 1">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
              
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/safari.jpg" alt="Image 2">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                     
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/safari.jpg" alt="Image 3">
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
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
        </div>
        <ul style="position: relative; z-index: 1;">
        A unique and sustainable development growth project. <br>
        A leisure and nature park, activity center, and resort destination. <br>
        Education Training and exhibit demonstrations of eco engineering technologies. <br>
        Like a permanent showground, Smaller and with accommodations. <br>
        </ul>
    </div>
    <div class="center">
        <h4>Ongoing Project</h4>
    </div>
    <div class="row owl-carousel slide wow fadeInUp" id="doctorSlideshow">
			<div class="item col" >
				<div class="" >
					<div class="header">
						<img class="img" style="width:390px; height:300px" src="../assets/img/17 slope.jpg" alt="">
					</div>
					
				</div>
			</div>
			<div class="item col">
				<div class="">
					<div class="header">
						<img class="owl-img" style="width:390px; height:300px" src="../assets/img/14 slope.jpg" alt="">
					</div>
					
				</div>
			</div>
			<div class="item col">
				<div class="">
					<div class="header">
						<img class="owl-img" style="width:390px; height:300px" src="../assets/img/10 slope.jpg" alt="">
					</div>
					
				</div>
			</div>
			<div class="item col">
				<div class="">
					<div class="header">
						<img class="owl-img" style="width:390px; height:300px" src="../assets/img/21 slope.jpg" alt="">
					</div>					
				</div>
			</div>
			<div class="item col">
				<div class="">
					<div class="header">
						<img class="owl-img" style="width:390px; height:300px" src="../assets/img/13 slope.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
    </div>


    </div>
</div>

</x-base-layout>
