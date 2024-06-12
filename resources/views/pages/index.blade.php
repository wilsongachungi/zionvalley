@section('css')
    <style>
        p {
            color: antiquewhite;
        }

        /*
                                            .intro-container {
                                                text-align: center;
                                                padding: 50px;

                                                color: antiquewhite;
                                                margin-top: 20px;
                                            } */
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

        /* Default styles for .welcome-text */
        .welcome-text {
            display: none;
            color: antiquewhite;
            text-align: center;
            position: fixed;
            top: 20px;
            left: 59%;
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
    <h5 class="welcome-text">Welcome to Zion</h5>
    <div class="homepage">

        <div id="carouselExample" class="carousel slide bg-warning" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">ENVIRONMENTAL ASSESSMENT. <br>
                            Activity center, and Eco resort.
                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0" src="../assets/img/Home 1.jpg" alt="Image 1">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">ENVIRONMENTAL ASSESSMENT. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home 2.JPG" alt="Image 2">
                </div>

                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">ENVIRONMENTAL ASSESSMENT. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home 3.jpg" alt="Image 3">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">ENVIRONMENTAL ASSESSMENT. <br>
                            Activity center, and Eco resort.

                        </p>
                    </div>
                    <img class="img1 pb-0 mb-0 d-block w-100" src="../assets/img/Home 4.JPG" alt="Image 3">
                </div>
                <div class="carousel-item text-center">
                    <div class="custom-carousel-item d-flex align-items-center justify-content-center">
                        <p class="custom-carousel-text" style="color:greenyellow">ENVIRONMENTAL ASSESSMENT. <br>
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


        <div class="intro-container"
            style="background-image: url('../assets/img/Capture11.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
            <div class="green-tint" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
            <p class="line-height-1.5"
                style="font-size: 1.2em; margin-bottom: 10px; position: relative; text-align: center;">
                A Garden of Eden including Rare Tree Arboretum, Botanical Gardens and Seed Banks. <br>
                A reserve for rare, endangered and medicinal herbs, plants and trees.
            </p>
        </div>
        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6" style="line-height: 1.5;">
                    <h4 class="justify-content-center text-center">Welcome to Zion</h4>
                    <p style="text-align: center;" class="justify-content-center text-center">
                        Let the beauty of Zion Valley unfold,
                        <br>

                        Heavenly haven where paradise takes ahold. <br>
                    </p>
                    <p class="justify-content-center text-center">
                        The Promised Land, where dreams can thrive. <br>
                        Rivers that dance and gardens alive.
                    </p>
                </div>
            </div>

        </div>
    </div>





    <div class=" container content wow zoomIn slow ">
        <div class=" line-height-1.5 ">
            <div class="accordions">
                <div class="accordion" onclick="toggleDiv('div11')">
                    <h3 class="float-left text-lg">
                        EcoHub
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div11" class="line-height-1.5 desc text-center">
                    <p>
                        Focal centers to inspire and facilitate Afro Centric innovative solutions to a wide range of
                        Climate and environmental challenges.
                    </p>

                    <p>

                        Dynamic and inclusive communities of those like-motivated and passionate about the environment
                        to network, interact and learn.
                    </p>
                    <p>
                        Eco-regenerated surroundings to inspire and communicate an appreciation and understanding of
                        what it is we are working for.
                    </p>
                    <p>
                        Formal and organic interactions between environmental organizations, agencies, and communities.
                        Between climate experts and professionals. stakeholders, practitioners, individuals and
                        entreprenuers with diverse perspectives and expertise
                    </p>
                    <p>
                    <p>
                        Workshops to actively exchange ideas and knowledge, to share best practices, potential problems
                        and solutions.
                    </p>
                    <p>
                        Facilitating interaction between the public and private sectors to address systemic barriers,
                        policies, and regulations to support progress toward environmental sustainability.
                    </p>
                    <p>
                        Active promotion of entrepreneurial opportunities and potential partnerships in the development
                        and implementation of transformative solutions.
                    </p>
                </div>

                <div class="accordions">
                    <div class="accordion" onclick="toggleDiv('div13')">
                        <h4 class="float-left text-lg">
                            Access to Resources and Support:
                        </h4>
                        <i class="text-md float-right">&#9660;</i>
                    </div>
                    <div id="div13" class="desc text-center">
                        <p>
                            Shared office, equipment, facilities and resources.
                            Venues for seminars, forums, AGM’s, conferences, and workshops.
                        </p>
                        <p>
                            Exhibition promotion and information space from environmental and member organizations.
                            Latest projects, innovative technologies, best practice and contact info.
                        </p>
                        <p>
                            Product info on areas such as eco-engineering and construction, Renewable energy,
                            eco-materials, eco products, and services.
                        </p>
                        <p>Information dissemination and access to funding support mechanisms, training, and education.
                        </p>
                        <p>
                            Research, testing, and development of innovative solutions and activities related to
                            environmental technologies, climate mitigation strategies,
                        </p>
                    </div>
                </div>

                <div class="intro-container"
                    style="background-image: url('../assets/img/1 Capture9.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: antiquewhite;">
                    <div class="green-tint" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                    </div>
                    <p class="line-height-1.5"
                        style="font-size: 1.2em;margin-bottom: 10px; position: relative; text-align: center; ">
                        The collective aim being to increase the knowledge capacity, development and implementation of
                        transformative solutions, and sustainable practices at the expert level.
                    </p>
                </div>


            </div>
            <div class="accordions">
                <div class="accordion" onclick="toggleDiv('div3')">
                    <h3 class="float-left text-lg">
                        Community-based
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div3" class="mydiv" style="line-height: 1.5;">
                    <p>
                        As a CBO, a Community Based Organization, <br> This project is totally unique and
                        unlike any other resort.
                    </p>
                    <p>
                        Many of the people you shall meet will be Harambee owners who have all <br> come together to
                        share in the creation and
                        benefits from this collective project.
                    </p>
                    <p>
                        Zion Valley shall feel more like staying
                        in a family village as many will be owners themselves, one day just like you.

                    </p>
                    <p>
                        A sense of belonging for new guests as so many will greet and welcome you.
                    </p>
                </div>
            </div>

            <div class="accordions">
                <div class="accordion" onclick="toggleDiv('div1')">
                    <h3 class="float-left text-lg">
                        Attractions and Activities
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div1" class="myDiv"
                    style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                    <p>Zion Valley main attractions being the natural beauty of the Valley and its
                        surroundings.
                    </p>
                    <p>
                        The Chania river, two waterfalls, landscaping, indigenous trees, flowers, and nature
                        based
                        structures..
                    </p>
                    <p>
                        Recreational activities to include natural swimming ponds, kiddie play areas, nature
                        walks,
                        Zip line’s etc. Music events, bar, restaurant, multiple rental cottages, shops and
                        more.
                    </p>

                    <p>
                        Others
                        may be at Zion for training and to learn from the countless examples of how one can
                        create
                        solutions and value from working with nature.
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

            @include('layouts.user.partials.services')
            <div class="container content wow zoomIn slow">
                <div>
                    <div style="line-height:1.5; test-align:left">
                        <h4>Decision made</h4>
                        <p>
                            Decision made..
                        <p>
                        <p>
                            We are leaving the Nairobi concrete hustle and heading
                            north to Mount Kenya foothills…
                        </p>
                        <p>
                            The excitement begins!
                        </p>
                        <p>
                            The road rising, twisting right and left like a meandering river.
                        <p>
                            Forever rising through
                            ever green valleys
                            and ever steeper hills, surrounded by lush verdant growth everywhere – and the steepest
                            roadside drops!!! -
                        </p>
                        <p>
                            A truly exhilarating journey.
                        </p>

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
                            Zion Valley – Sitting right there beside an amazing waterfall – WOW.
                        </p>
                        <p>
                            Soothing roars from the crashing waters and the world of traffic soon becomes a distant
                            memory. <br> - Peace at last.
                        </p>
                        <p>
                            Energized by lungful’s of pure clean air, we find ourselves wandering down the
                            meandering rive side path
                        </p>
                        <p>
                            Enchanted by the birds, the bees, the flowers and trees, the incredible
                            sceneries bursting with forth with life and abundant growth.
                        </p>
                        <p>
                            Artistic living sofas carved from nature are everywhere, Free to sit and soak up the
                            sounds and boundless joys of nature.
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
                                river - Heaven.
                            </p>
                            <p>
                                After some time – some seemingly endless time and realizing there is ever more to
                                this
                                adventure, our journey continues.
                            </p>
                            <p>
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
