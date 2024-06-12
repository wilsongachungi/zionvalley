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

        {{-- <div class="container">
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

        </div> --}}
    </div>


    <div class="container content wow zoomIn slow">
        <div>
            <div style="line-height:1.5; test-align:left">
                <h4 style="text-align: center">OPPORTUNITY - POTENTIAL - SOLUTION</h4>
                Rivers and Valleys of Mt Kenya and Aberdere are eco-system highways of strategic ecological
                significance. Eco Interconnections are crucial to supporting biodiversity, flora fauna and clean water
                delivery systems to towns, villages and urban population centers.
                Steep valley sides are currently neglected, under valued, and provide very little for human sustenance.
                We have the perfect opportunity for ecosystem regeneration and to create something special and extremely
                valuable.

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


            <div class="container content wow zoomIn slow">
                <div>
                    <div style="line-height:1.5; test-align:left">
                        <h4 style="text-align:center">Eco Parc Local Zion Valley CBO’s</h4>
                        A Garden of Eden with Botanical Gardens and an Arboretum, a visitor and learning center.
                        <br>
                        A permanent Eco Showground Including, nature walks, sauna, Yoga, juice bar Earth Oven Pizzas,
                        fire
                        pits, camping and accommodations. <br>
                        Displays and examples to inspire regular people, regular people who didn’t necessarily come to
                        be educated on Global ‘Climate’ issues, but who came to Zion for some fun and leisure time. <br>
                        Workshops and activities with information on what they themselves can do at home and at the
                        Shamba scale and how.

                    </div>

                </div>
                <div class="accordions">
                    <div class="accordion" onclick="toggleDiv('div7')">
                        <h3 class="float-left text-lg">
                            African appropriate technologies and focused at the Urban and Shamba scale.
                        </h3>
                        <i class="text-md float-right">&#9660;</i>
                    </div>
                    <div id="div7" class="myDiv"
                        style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                        Smart Farming means feeding the soil and its organisms - Before the soil then feeds the crops.
                        The role of Fungi, Beetles and Worms etc.
                        Water absorption and retention, how nature recycles biomass into soil manures
                        How the River/Riparian, the steep valleys and low-value land can become an environmental wonder,
                        can support a community and give sustainable benefits to everyone.
                        How jobs can be created by working with nature Simple shamba scale technologies and information
                        at the local levels for practical action by the maximum numbers of regular people.
                    </div>
                    {{-- <div class="accordions">
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
                    </div> --}}
                </div>

                <div class="accordions">
					<div class="accordion" onclick="toggleDiv('div12')">
						<h3 class="float-left text-lg">
							The Greater Future Potential
						</h3>
						<i class="text-md float-right">&#9660;</i>
					</div>
					<div id="div12" class="myDiv" style="display: none; transition: opacity 0.6s ease; line-height: 1.5;">
						<p>Zion Valley Global Foundation</p>
						<p>The potential exists for the Replication of the EcoHub and EcoParc model to be rolled out to numerous river valley riparian communities across Kenya and even beyond.</p>

						<h4>EcoHub’s</h4>
						<p>Locally placed networking, educational learning and information dissemination centers.</p>
						<p>Focal points for eco-orientated groups, organizations, and individuals to facilitate the development and implementation of transformative solutions.</p>

						<h4>EcoParc’s</h4>
						<p>Self-sustaining revenue model to attract visitors and impart awareness of the abundant value of nature and the Environment.</p>
						<p>Community-level access to eco-building and renewable energy exhibits, demonstrations, displays, activities, and workshops to communicate what individuals can do for themselves.</p>

						<h4>Target Audiences</h4>
						<p><strong>EcoHubs:</strong> Eco-related students, specialists, NGOs, entrepreneurs, and agencies.</p>
						<p><strong>EcoParcs:</strong> Regular people who are to be attracted by the ‘leisure’ offerings, including those who may not be otherwise aware of the ‘Climate’ issues and solutions.</p>

						<h4>Mission & Vision</h4>
						<p>To propagate the Nyeri climate mitigation EcoHub and EcoParc models to numerous local communities at multiple locations across Kenya/Africa – even beyond.</p>

						<h4>Strategy</h4>
						<p>Develop the CBO framework for the integration of land use and management teams for EcoHub implementation at the local group level. The CBOs being the legal framework that can protect the landowners and at the same time bring the use of lands into one collective project.</p>
						<p>Refine ‘Plug and Go’ administration frameworks as required for local ‘Franchise’ replication.</p>
						<p>Coherent rules, regulations, and operation manuals for self-supporting, self-operating EcoHubs.</p>

						<h4>Plan</h4>
						<p>A. Learn from the process of developing the Nyeri project as the first working model test bed.</p>
						<p>B. Test the replication procedures by setting up a second site before considering rolling out to multiple potential venues.</p>

						<h4>Zion Valley Global - The Foundation Central Administration and Stewardship Team/Office</h4>
						<p>1. Identify EcoHub locations and communities suitable for replication.</p>
						<p>2. Engage local community, identify commitment, and create the local ‘team’.</p>
						<p>3. Conduct local meetings to communicate to the landowners that the steep valley slopes are environmental capital, and that indigenous trees have more value standing than being cut for charcoal.</p>
						<p>4. Provide process and administer the resources (grants/loans) for each local startup.</p>
						<p>5. Ongoing stewardship oversight and supervisory relationships with local CBO ‘Facilitator’ teams.</p>

						<p>Replication of the EcoHub and EcoParc model for maximum climate change mitigation</p>
						<p>Message and solutions communicated to thousands of regular people.</p>
					</div>
				</div>

				<script>
					function toggleDiv(divId) {
						var div = document.getElementById(divId);
						div.style.display = div.style.display === 'none' ? 'block' : 'none';
					}
				</script>

            </div>

</x-base-layout>
