<x-base-layout>

    <div class="page-hero bg-image " style="background-image: url(../assets/img/tree.avif); opacity: 0.5;">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <h5 class="display-4">Harambee</h5>


            </div>
        </div>
    </div>



    <div class="row" id="harambee" style="padding-top: 20px">
        <div class="col" style="margin-left: 45px">
            <img src="../assets/img/tree2.jpeg" alt="">
        </div>
        <div class="col" style=" margin-left:20px">
            <h3 style="color:greenyellow; margin-left:20px">Harambee Trees</h3>
            <p style="color:greenyellow"><strong>The means by which zion is to be owned collectively</strong></p>
            <p>Zion Valley will issue 'Harambee Trees' as a membership Certificate. <br>
                Issued for professional services,for time, for skills-the use of the land, or use of financial services
            </p>
        </div>
        <div class="col" style=" margin-left:20px">
            <h3 style="color:greenyellow">Transparency Online</h3>
            <p>All activities, Historical achievements and future direction proposals to be fully presented online.
                Forum for comments and conversations by and all members.<br>
                Harambee tree growth and fruit harvest projections.
                Harambee's may be exchanged via the website.
            </p>
        </div>

    </div>

    <div class="container" style="padding-top: 30px; margin-left:px ">
        <div class="text1">
            <h4 style="color: greenyellow">Community-based organization</h4>
            <p style="color: white">Community-based organizations (CBOs) will play role in dealing with significantly
                benefit nature preservation. This organization have a vested interest in preserving natural
                surroundings. CBOs will act as a powerful advocate for sustainable resort development and responsible
                land use practices. They will help ensure that the resort is designed and operated in a way that
                minimizes the impact on the environment, such as by promoting eco-friendly construction, waste
                reduction, and energy efficiency.</p>
        </div>
        <div class="text2">
            <h5 style="color: greenyellow ">Community Needs Assessment: <i class="arrow"
                    onclick="toggleDiv('div1')">&#9660;</i></h5>
            {{-- <h5 style="color: greenyellow ">Community Needs Assessment: <i class="fa-solid fa-envelope" onclick="toggleDiv('div1')"></i></h5> --}}
            <div id="div1" class="myDiv" style="display: none ;transition: opacity 0.3s ease;">
                <p>
                    Conduct a thorough assessment of the community's needs and identify areas where employment
                    opportunities are lacking. This could involve surveys, interviews, and discussions with community
                    members to understand their skills, interests, and potential areas for economic growth</p>
            </div>
        </div>
        <div class="text2">
            <h5 style="color: greenyellow; transition: opacity 0.3s ease;">Skills Training Programs: <i
                    class="fa-solid fa-envelope" onclick="toggleDiv('div2')"></i></h5>
            <div id="div2" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
                <p>Develop skills training programs based on the identified needs of the community.
                    Offer training in areas such as hospitality, eco-tourism, trail guiding, customer
                    service, and other skills relevant to the local economy and the objectives
                    of the CBO.</p>
            </div>
        </div>
        <div class="text2">
            <h5 style="color: greenyellow; transition: opacity 0.3s ease;">Mutual benefit <i
                    class="fa-solid fa-envelope" onclick="toggleDiv('div3')"></i></h5>
            <div id="div3" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
                <p>Foster partnerships with existing local businesses to expand their operations or create
                    new ventures. This could include collaborations with restaurants, shops, and service
                    providers, leading to increased employment opportunities</p>
            </div>
        </div>
        <div class="text2">
            <h5 style="color: greenyellow; transition: opacity 0.3s ease;">Community-Based Conservation Projects: <i
                    class="arrow" onclick="toggleDiv('div4')">&#9660;</i></h5>
            <div id="div4" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
                <p>Engage in conservation projects that not only protect the natural environment but also
                    create jobs. This might include initiatives like reforestation programs, wildlife
                    monitoring, and sustainable resource management</p>
            </div>
        </div>
    </div>
</x-base-layout>
