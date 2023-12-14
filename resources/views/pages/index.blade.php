<x-base-layout>
    <div class="homepage">
        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <img class="img1 pb-0 mb-0" src="../assets/img/IMG_20181226_140601.jpg" alt="Image 1">
                    <div class="carousel-caption mx-auto px-5 text-xl">Community River</div>
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
                    <img class="img-fluid w-100 pb-0" src="../assets/img/HandRail.JPG"
                        alt="">
                </div>
                <div class="col-md-8 desc">
                    <div class="text-justify line-height-2">
                        <p>
							The decision now made – We are leaving the Nairobi concrete hustle and heading north to the
							Mount Kenya foothills - The excitement begins!
                        </p>
                        <p>
							With the road gradually rising then twisting curving, right and left like a meandering river.
							 Rising forever through valleys and ever steeper hills, surrounded by lush green verdant growth
							  everywhere!
							Now and then the steepest drops - a truly exhilarating journey
                        </p>
                        <p>
                            Twilight descending and a golden glow appearing from behind the far mountain. Dawn arrives just outside
							 Nyeri town, then like a time and long forgotten world, we find ourselves inside Zion Valley – Sitting
							 right there beside an amazing waterfall – WOW
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="text-justify line-height-2 mt-4">
		<div class="accordions">
			<div class="accordion" onclick="toggleDiv('div1')">
				<h3 class="float-left text-lg">
					Community Needs Assessment
				</h3>
				<i class="text-md float-right">&#9660;</i>
			</div>
			<div id="div1" class="text-justify line-height-2 desc">
				<p class="text-justify line-height-2">
					Soothing roars from crashing waters and the world of traffic soon becomes a distant memory. -
					Peace at last.

					Energized by lungful’s of pure clean air, we find ourselves wandering down the meandering river side
					 path. Enchanted by the birds, the bees, the flowers and trees, the incredible sceneries bursting with
					 forth with life and abundant growth.
					Artistic living sofas carved from nature are everywhere, we sit and soak up the sounds and boundless
					joys of nature.
				</p>
			</div>
			<div class="accordion" onclick="toggleDiv('div2')">
				<h3 class="float-left text-lg">
					Skills Training Programs
				</h3>
				<i class="text-md float-right">&#9660;</i>
			</div>
			<div id="div2" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
				<p>Develop skills training programs based on the identified needs of the community.
					Offer training in areas such as hospitality, eco-tourism, trail guiding, customer
					service, and other skills relevant to the local economy and the objectives
					of the CBO.</p>
			</div>
			<div class="accordion" onclick="toggleDiv('div3')">
				<h3 class="float-left text-lg">
					Mutual benefit
				</h3>
				<i class="text-md float-right">&#9660;</i>
			</div>
			<div id="div3" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
				<p>Foster partnerships with existing local businesses to expand their operations or create
					new ventures. This could include collaborations with restaurants, shops, and service
					providers, leading to increased employment opportunities</p>
			</div>
			<div class="accordion" onclick="toggleDiv('div4')">
				<h3 class="float-left text-lg">
					Community-Based Conservation Projects
				</h3>
				<i class="text-md float-right">&#9660;</i>
			</div>
			<div id="div4" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
				<p>Engage in conservation projects that not only protect the natural environment but also
					create jobs. This might include initiatives like reforestation programs, wildlife
					monitoring, and sustainable resource management</p>
			</div>
		</div>
	</div>

    @include('layouts.user.partials.services')
    @include('layouts.user.partials.latest')
</x-base-layout>
