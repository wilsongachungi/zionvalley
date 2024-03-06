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
            padding: 20px;
        }

        .custom-carousel-text {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
    </style>
@endsection

<x-base-layout>
    <div class="homepage">
        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text">As the beauty of Zion Valley unfolds,
                            <br>
                            Heavenly haven where paradise takes hold. <br>

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0" src="../assets/img/IMG_20181226_140601.jpg" alt="Image 1">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text">As the beauty of Zion Valley unfolds,
                            <br>
                            Heavenly haven where paradise takes hold. <br>

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/safari.jpg" alt="Image 2">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text">As the beauty of Zion Valley unfolds,
                            <br>
                            Heavenly haven where paradise takes hold. <br>

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/ziplining2.jpg" alt="Image 3">
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
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
            </div>
            
            <ul style="position: relative; z-index: 1;">
                <li>A unique and sustainable development growth project.</li>
                <li>A leisure and nature park, activity center, and resort destination.</li>
                <li>Education Training and exhibit demonstrations of eco engineering technologies.</li>
                <li>Like a permanent showground, Smaller and with accommodations.</li>
            </ul>
        </div>

        <div style="line-height:1.5">
        <h4>Welcome to Zion</h4>
        <p style="test-align:left">
              As the beauty of Zion Valley unfolds,
                <br>
                Heavenly haven where paradise takes hold. <br>
                The Promised Land, where dreams can thrive. <br>
                Rivers that dance and gardens alive.
            </p>
        </div>




        <div class=" container content wow zoomIn slow ">
            <div class=" line-height-1.5 ">
                <div class="accordions">
                    <div class="accordion" onclick="toggleDiv('div11')">
                        <h3 class="float-left text-lg">
                            Birds sing
                        </h3>
                        <i class="text-md float-right">&#9660;</i>
                    </div>
                    <div id="div11" class="line-height-1.5 desc text-center">
                        <p>
                            Birds sing melodies and bees with delight. <br>
                            Happy pamoja people in love's warm light. <br>
                            Heaven cannot be lonely, is a place to be shared
                            Community Harambee, <br> united and cared.
                        </p>
                        <p>
                            Nature's wonders and love's embrace,
                            Guided journey to this sacred place. <br>
                            Wonders discovered, let love be your guide. <br>
                            Zion's sanctuary, find peace deep inside.
                        </p>
                    </div>

                    <div class="accordions">
                        <div class="accordion" onclick="toggleDiv('div13')">
                            <h4 class="float-left text-lg">
                                Joy and Peace
                            </h4>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div13" class="desc text-center">
                            <p>
                                In Zion Valley find joy and peace. <br>
                                Where heaven meets earth, and all worries cease. <br>
                            </p>
                            <p>
                                Righteousness Peace and Unity calls. <br>
                                In Zion's haven let your spirit stand tall. <br>
                            </p>
                            <p>
                                To the Promised Land where your soul can be free. <br>
                                Get on board the Zion train, Let your spirit BE. <br>
                            </p>
                        </div>
                    </div>

                    <div class="intro-container"
                        style="background-image: url('../assets/img/1 Capture9.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: antiquewhite;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </div>
                        <ul style="position: relative; z-index: 1;color: antiquewhite;">
                            <li>A unique and sustainable development growth project.</li>
                            <li>A leisure and nature park, activity center, and resort destination.</li>
                            <li>Education Training and exhibit demonstrations of eco engineering technologies.</li>
                            <li>Like a permanent showground, Smaller and with accommodations.</li>
                        </ul>
                    </div>

                    <div class="accordions">
                        <div class="accordion" onclick="toggleDiv('div3')">
                            <h3 class="float-left text-lg">
                                Community-based
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div3" class=" line-height-1.5 desc">
                            <p class="" style:>
                                As a CBO, a Community Based Organization, This project is totally unique and
                                unlike any other resort. <br>
                                Many of the people you shall meet will be Harambee and
                                community land owners who have all come together to share in the creation and
                                benefits from this collective project. <br>
                                Zion Valley shall feel more like staying
                                in a family village as many will be owners themselves, one day just like you. <br>
                                A sense of belonging for new guests as so many will greet and welcome you.
                            </p>
                        </div>
                        <div class="accordions">
                            <div class="accordion" onclick="toggleDiv('div1')">
                                <h4 class="float-left text-lg">
                                    Attractions and Activities
                                </h4>
                                <i class="text-md float-right">&#9660;</i>
                            </div>
                            <div id="div1" class="desc">
                                <p class="" style:>
                                    Zion Valley main attractions being the natural beauty of the Valley and its
                                    surroundings.
                                    <br>
                                    The Chania river, two waterfalls, landscaping, indigenous trees, flowers, and nature
                                    based
                                    structures.. <br>
                                    Recreational activities to include natural swimming ponds, kiddie play areas, nature
                                    walks,
                                    Zip line’s etc. Music events, bar, restaurant, multiple rental cottages, shops and
                                    more.
                                    <br>
                                    Others
                                    may be at Zion for training and to learn from the countless examples of how one can
                                    create
                                    solutions and value from working with nature.
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.user.partials.services')
                <div class="container content wow zoomIn slow">
                    <div>
                        <div style="line-height:1.5">
                            <h4>Decision made</h4>
                            <p style="test-align:left">Decision made.. <br>
                                We are leaving the Nairobi concrete hustle and heading
                                north to Mount Kenya foothills… <br>
                                The excitement begins! <br>
                                The road rising, twisting right and left like a meandering river. Forever rising through
                                ever green valleys
                                and ever steeper hills, surrounded by lush verdant growth everywhere – and the steepest
                                roadside drops!!! - <br>
                                A truly exhilarating journey.
                        </div>

                    </div>
                    <div class="accordions">
                        <div class="accordion" onclick="toggleDiv('div7')">
                            <h3 class="float-left text-lg">
                                Forgotten world
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div7" class="myDiv"
                            style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                            <p>
                                Dawn arrives just outside Nyeri town, then like a time forgotten world, we find
                                ourselves
                                inside
                                Zion Valley – Sitting right there beside an amazing waterfall – WOW. <br>
                                Soothing roars from the crashing waters and the world of traffic soon becomes a distant
                                memory.
                                - Peace at last. <br>
                                Energized by lungful’s of pure clean air, we find ourselves wandering down the
                                meandering
                                river
                                side path. Enchanted by the birds, the bees, the flowers and trees, the incredible
                                sceneries
                                bursting with forth with life and abundant growth. <br>
                                Artistic living sofas carved from nature are everywhere, Free to sit and soak up the
                                sounds
                                and
                                boundless joys of nature.
                            </p>
                        </div>
                        <div class="accordions">
                            <div class="accordion" onclick="toggleDiv('div4')">
                                <h3 class="float-left text-lg">
                                    Our Hot Meal
                                </h3>
                                <i class="text-md float-right">&#9660;</i>
                            </div>
                            <div id="div4" class="myDiv"
                                style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                                <p>One text message and our hot meal arrives, delivered by hand to our shaded chosen
                                    sofa by
                                    the
                                    river - Heaven. <br>
                                    After some time – some seemingly endless time and realizing there is ever more to
                                    this
                                    adventure, our journey continues.
                                    Laughter and the playful splashes of children beckon us to venture and discover
                                    three
                                    natural swimming pools, exhilarating zip lines, and a vast array of nature-inspired
                                    resort
                                    activities.
                                </p>
                                <p>
                                    Surrounded by so many charming cottages nestled amongst huge forest trees, we take a
                                    moment
                                    in our chosen resting place, a romantic and secluded marram soil eco lodge. <br>
                                    We prepare ourselves for the evening ahead.
                                </p>
                                <p>
                                    As the sun sets and vibrant bars come alive, we venture out for a night of music,
                                    dancing,
                                    happy people and an unforgettable night filled with experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
</x-base-layout>
