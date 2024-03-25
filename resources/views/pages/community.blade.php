@section('css')
<style>
    .custom-carousel-item {
    position: absolute;
    text-align: center;
    background-color: rgba(3, 79, 3, 0.5);
    padding: 20px;
}

.custom-carousel-text {
    font-size: 1.2em;
    margin-bottom: 10px;
}

p {
    color: antiquewhite;
    line-height: 1.5;
    text-align: left;
}

.banner-container {
    text-align: center;
    padding: 50px;
    background-color: #021e32;
    color: antiquewhite;
    margin-top: 20px;
}

@keyframes zoomShrinkIn {

    0%,
    100% {
        opacity: 1;
    }

    50% {
        opacity: 0;
    }
}

.zoomShrinkIn {
    animation: zoomShrinkIn 10s infinite;
    animation-delay: 5s;
    /* Delay the animation start for 5 seconds */
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


.green-tint {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 50, 0, 0.5);
    /* Green with 50% opacity */
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
    <h5 class="welcome-text">Community</h5>

    <div class="community">

      <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">A leisure and Nature parc. <br>
                            Activity center, and Eco resort.
                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0" src="../assets/img/Home 1.jpg" alt="Image 1">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">A leisure and Nature parc. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home 2.JPG" alt="Image 2">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">A leisure and Nature parc. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home 3.jpg" alt="Image 3">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">A leisure and Nature parc. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home 4.JPG" alt="Image 3">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">A leisure and Nature parc. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home Carosel.jpg" alt="Image 3">
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
    </div>
    </div>
    </div>
    <div class="banner-container"
        style="position: relative; color: antiquewhite;; padding: 20px; text-align: center; margin-top:20px; background-image: url('../assets/img/banner1.jpeg'); background-size: cover; background-position: center; ">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
            <!-- Adjust the rgba values to change the color and opacity -->
        </div>
        <div class="green-tint" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
        <p class="line-height-1.5" style="font-size: 1.2em;
            margin-bottom: 10px; position: relative; text-align: center; ">
            By coming together as a Harambee Village Community - Zion Valley is a living working example to
            demonstrate that land which is otherwise low value and providing little sustenance to its owners, can
            now be transformed into an income-generating project that serves the community, the environment, and all
            its Harambee members.
            <br>
            We shall also represent the community in providing solutions to such problems as the lack of a bridge.
        </p>
    </div>



    <div class="container content wow zoomIn slow">
        <div class="accordions">
            <div class="accordion" onclick="toggleDiv('div9')">
                <h3 class="float-left text-lg">
                    Community Mutual benefit
                </h3>
                <i class="text-md float-right">&#9660;</i>
            </div>
            <div id="div9" class="myDiv" style="display: none ;transition: opacity 0.6s ease;line-height: 0.5;">
                <p style="text-align: left">
                <p>As a Climate Change model, Zion Valley is proving that we can work with nature to create
                    revenue. <br>
                    We can preserve and enhance the natural environment and at the same time eliminate the
                    temptation to destroy by cutting trees etc.<br>
                </p>
                <p>
                    We do this by rewarding land owners for the value added by making the environment attractive
                    to customers due to its enhanced natural beauty value.<br>
                    Indigenous trees will now have far more value standing than they could ever have by being
                    cut down.
                </p>
                <p>
                    Zion will be working with surrounding businesses where possible to supply goods and
                    services.<br>
                    Zion will also partner and collaborate for on-site ventures including restaurants, shops,
                    entertainments and personal services.<br>
                    This being in addition to the benefits for locals who may also be shared owners
                </p>
                </p>
            </div>

            <div class="accordions">
                <div class="accordion" onclick="toggleDiv('div8')">
                    <h3 class="float-left text-lg">
                        Employment
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div8" class="myDiv" style="display: none ;transition: opacity 0.6s ease;line-height: 0.5;">
                    <p style="text-align: left">
                        Zion Valley will directly and indirectly employ both low/semi-skilled labor from the
                        community.
                        Employment to include numerous shamba tasks to create and maintain the living environment.
                        <br>
                        Fundi and juakali skills for construction of cottages, restaurants etc <br>
                        Hotel workers, secretaries, tour guides, fundi’s etc. Plus managers, web designers,
                        accountants
                        and more. <br>
                    </p>
                    <ul>
                        <li style="line-height: 1.5; color: rgb(162, 161, 159);">Opportunities and support for
                            disabled
                            and disadvantaged </li><br>
                        <li style="line-height: 1.5; color: rgb(162, 161, 159);">Harambee certificates given for
                            example
                            as annual bonus to
                            dedicated employees. </li><br>
                        <li style="line-height: 1.5; color: rgb(162, 161, 159);">Harambee members will be first in
                            line
                            for any employment
                            opportunities. </li><br>
                    </ul>
                </div>
                <div class="accordions">
                    <div class="accordion" onclick="toggleDiv('div7')">
                        <h3 class="float-left text-lg">
                            Knowledge and Education.
                        </h3>
                        <i class="text-md float-right">&#9660;</i>
                    </div>
                    <div id="div7" class="myDiv" style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                        <p>
                            Workshops and Exhibitions of modern sustainable, simple, cheap and clean technologies in
                            line with internationally researched techniques and technologies.
                        </p>
                        <ul>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Modern Eco construction
                                utilizing
                                local soils and traditional low impact materials.</li>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Opportunities and support for
                                disabled and disadvantaged.</li>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Living structures: Buildings
                                Shelters and Art which is ‘Alive’.</li>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Permaculture techniques
                                including
                                composting of bio wastes into fertile soil manures.</li>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Solar air fruit dryers and
                                Solar
                                hot water heaters – How to design and make your own.</li>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Hydroelectric, wind and solar
                                technologies - Potential export to Kenya Power.</li>
                            <li style="line-height: 1.5; color: rgb(162, 161, 159);">Fall of river powered water
                                pumping
                                systems – No generators.</li>
                        </ul>
                    </div>
                    <div class="accordions">
                        <div class="accordion" onclick="toggleDiv('div4')">
                            <h3 class="float-left text-lg">
                                Social
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div4" class="myDiv"
                            style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                            <p>Wherever possible, Zion Valley shall be working with local and international donors,
                                governments and the community to support the disadvantaged. <br>
                                This social element is intended to give opportunities and solutions to the issues
                                facing
                                ‘Street Boys’ the elderly, persons with disability and those otherwise finding
                                themselves without access to normal working positions.<br>
                                Such support to include food, shelter, simple training and work like experiences in
                                a
                                supportive environment.<br>
                                It is hoped and expected that this will also contribute the ‘Harambee Village’ feel
                                of
                                Zion Valley </p>
                        </div>
                        <div class="accordion" onclick="toggleDiv('div5')">
                            <h3 class="float-left text-lg">
                                Indigenous cultures.
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div5" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
                            <p>
                                Zion Valley to be a venue for traditional dancer’s artist’s entertainers and ‘street
                                performers’. <br>
                                Workshops for local production of traditional crafts and inputs from various tribal
                                groups. <br>
                                Products showcased and available to visitors and tourists. <br>
                                To be marketed online and exported across Kenya and beyond with revenues being
                                shared
                                with Zion.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-base-layout>