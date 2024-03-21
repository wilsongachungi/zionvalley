@section('css')
<style>
p {
    color: antiquewhite;
    line-height: 1.5;
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

@keyframes zoomInOut {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }

    100% {
        transform: scale(1);
    }
}

.zoom-in-out {
    animation: zoomInOut 5s infinite;
}

@media (max-width: 767px) {
    .welcome-text {
        display: block;
        color: antiquewhite;
        text-align: center;
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
    <h5 class="welcome-text ">Harambee</h5>
    <div class="harambee">
        <div class="page-hero bg-image">
            <div class="hero-section">
                <div class="container text-center" id="heroContent">
                    <div class="container text-center wow zoom-in-out" id="zoomInOut"
                        style="background-color: rgba(3, 79, 3, 0.5); padding: 10px;">
                        <div class="line-height-1.5" style="text-align: center">
                            <h4>Zion Valley Harambee Village <br> Join for as little as 1k</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="banner-container"
            style="position: relative; color: antiquewhite; padding: 20px; text-align: center; margin-top:20px; background-image: url('../assets/img/banner2.jpeg'); background-size: cover; background-position: center; ">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <!-- Adjust the rgba values to change the color and opacity -->
            </div>
            <p class="line-height-1.5" style="font-size: 1.2em;
            margin-bottom: 10px; position: relative; ">
                As neighboring land owners and cash supporters - you are invited to join the Zion Valley
                Harambee Village. <br>
                To share in both the ownership and project rewards. <br>
                To also take ownership of romantic
                accommodation
                nights
            </p>
        </div>

        <div class="container content wow zoomIn slow">

            <div class="accordions">
                <div class="accordion " onclick="toggleDiv('div9')">
                    <h3 class="float-left text-lg">
                        Project Potential
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div9" class="myDiv" style="display: none ;transition: opacity 0.6s ease;line-height: 0.5;">

                    <p>A unique and sustainable growth project, a leisure and nature parc, an activity center and
                        resort destination. <br>
                        The steep valley slopes are currently unproductive and of little revenue value to its
                        owners.
                    </p>
                    <p>
                        The starting value is thus very low and with the land combined as one the value will be
                        greater. <br>
                        When combined for one purpose, as an income generating Harambee Village enterprise, then
                        certificate values shall become worth even more.
                    </p>
                    <p>
                        Combined as a CBO legal entity to provide security to both the project and the land owners
                        respectively, the support can be generated and development proceed. <br>
                        The growth in Harambee Certificate value to land owners and early financial supporters is
                        likely to be in the order of 10 or 20 times. <br>
                        The revenue potential, the ‘Fruits’ from visitors and especially the Romantic Cottage
                        rentals is enormous.
                    </p>
                </div>

                <div class="accordion" onclick="toggleDiv('div8')">
                    <h3 class="float-left text-lg">
                        Harambee Trees
                    </h3>
                    <i class="text-md float-right">&#9660;</i>
                </div>
                <div id="div8" class="myDiv" style="display: none ;transition: opacity 0.6s ease;line-height: 0.5;">
                    <p>
                        Zion Valley will issue 'Harambee Trees' as Zion Valley ownership Certificates.
                        Tree certificates are issued in relation to contributions made. <br>
                        For example professional services, for time, for skills and the use of land, or the use of
                        financial resources. <br>
                        Included are the Architects and members who have assisted the obtaining of grant donor
                        resources.<br>
                    </p>
                    <p>
                        Ownership shall remain valid until you decide to sell your certificates.<br>
                        You may leave “will” instructions for certificate succession to numerous persons.<br>
                        You may sell any number at any time. NB Land certificates must be sold to/ via the CBO.<br>
                        You may use your certificates for short term small loans or emergencies.<br>
                    </p>
                    <p>
                        Details as outlined in the <span style="color: greenyellow; cursor:pointer">Constitution</span>
                        and <span style="color: greenyellow">Rules & Regulations</span>
                    </p>
                </div>
                <div class="accordions">
                    <div class="accordion" onclick="toggleDiv('div7')">
                        <h3 class="float-left text-lg">
                            Ownership and Benefits
                        </h3>
                        <i class="text-md float-right">&#9660;</i>
                    </div>
                    <div id="div7" class="myDiv" style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                        <p>
                            Harambee Certificates, Just like trees, are expected to increase in value, to grow and
                            produce fruits.<br>

                            As the zion valley project begins to grow – so will your tree certificates grow Just like
                            real trees, your certificates will grow in value – as the trees grow, so will the potential
                            to
                            produce fruits – Fruits which may be shared by Mpesa every 3 months.<br>
                        </p>
                        <p>
                            In addition and as Harambee owners you are entitled to regard the entire valley as yours and
                            to walk freely.<br>
                            You will also be shared owners of the romantic Cottages.<br>
                            This means that you, your partner of family can sleep for free.<br>
                        </p>
                        <p>
                            The size of cottage, the quality and number of nights are to be in proportion to the number
                            of certificates that you hold.<br>
                        </p>
                        <p>
                            Harambee owners will be the first to know and take preference for job and business
                            opportunities,<br>
                        </p>
                        <p>For full information visit Constitution <span
                                style="color: greenyellow; cursor:pointer">Constitution
                            </span> and
                            <span style="color: greenyellow; cursor:pointer">Rules & Regulations</span>
                        </p>
                    </div>
                    <div class="intro-container"
                        style="background-image: url('../assets/img/4 Capture3.JPG'); background-size: cover; background-position: center; padding: 20px; position: relative; color: rgb(235, 234, 236);">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ;">
                        </div>
                        <p class="line-height-1.5" style="font-size: 1.2em; margin-bottom: 10px; position: relative; ">
                            Zion Valley Structure <br>
                            A new community based business model.<br>
                            A shared ownership sustainable enterprise.<br>
                            Environment and Nature focused.<br>
                            Success by making people happy
                        </p>
                    </div>
                    <div class="accordions">
                        <div class="accordion" onclick="toggleDiv('div4')">
                            <h3 class="float-left text-lg">
                                Community-Based organisation
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div4" class="myDiv"
                            style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                            <p>The government registered CBO is the framework to legally secure the lands both
                                individually and collectively.<br>
                                The umbrella organization to incorporate the surrounding lands as one legal entity to
                                protect both the project and the land owners - Together as one project with a common
                                goal and constitution <br>
                            </p>
                        </div>
                        <div class="accordion" onclick="toggleDiv('div5')">
                            <h3 class="float-left text-lg">
                                Environment and Social responsibility
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div5" class="myDiv" style="display: none ;transition: opacity 0.6s ease;">
                            <p>
                                As a Harambee member of Zion Valley you are actively supporting the project goal of
                                demonstrating that the conservation of nature and creation of income can work togetheras
                                a
                                sustainable enterprise. <br>
                                You will also be supporting those in the community who would otherwise find themselves
                                unable to find sustenance and self respect in the conventional ways
                            </p>
                        </div>
                        <div class="accordion" onclick="toggleDiv('div2')">
                            <h3 class="float-left text-lg">
                                Facilitators
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div2" class="myDiv"
                            style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                            <p>The ‘office’ responsible for the design, direction, for the regulation and coordination,
                                the
                                planning and strategy of the overall project,<br>
                                To report to the CBO committee and membership with ongoing project progress and future
                                planned development proposals<br>
                                Based on the understanding that to develop and sustain such a project requires 3 key
                                elements and each are of equal importance. <br>

                                <span style="color: greenyellow; font-size:15px">1. Land 2. Resources 3. Vision and
                                    project
                                    management</span><br>
                                Only when growth has been achieved are the executive office to be rewarded with their
                                third share of sustained growth and issued in the form of Harambee certificates. <br>
                                The remaining two thirds, to be distributed amongst the Harambee membership. <br>
                                By design this is to ensure that the Executive office have the incentive to ensure the
                                effective and efficient internal administration of the project. <br>
                                The intentional incentive is also there to develop the income potential, to maximize
                                income and to minimize costs. <br>
                            </p>
                        </div>

                        <div class="accordion" onclick="toggleDiv('div3')">
                            <h3 class="float-left text-lg">
                                Project Implementers
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div3" class="myDiv"
                            style="display: none ;transition: opacity 0.6s ease;line-height: 1.5;">
                            <p>
                                This being the non profit, practical construction and action team. <br>
                                To quote for and carry out all CBO approved projects as directed and overseen by the
                                Architect team – to recruit labor and purchase materials as needed. <br>
                                The Implementers shall also be the ones to manage the Social elements including
                                ‘StreetBoys’ the elderly and persons with disabilities. <br>
                            </p>
                        </div>

                        <div class="accordion" onclick="toggleDiv('div1')">
                            <h3 class="float-left text-lg">
                                Transparency Online
                            </h3>
                            <i class="text-md float-right">&#9660;</i>
                        </div>
                        <div id="div1" class="text-justify line-height-1.5 desc">
                            <p class="text-justify line-height-1.5">
                                All activities, historical achievements and future direction proposals to be fully
                                presented online to the membership. <br>
                                Project reports and proposals available online for comments and voting approvals using
                                the Zion ‘FORUM’
                                Current Harambee valuations, tree growth and fruit harvest projections to be accessible
                                online. <br>
                                Harambee's may be bought, sold, registered and exchanged via the website. <br>
                                Printed newsletters and free access to CBO computers at the Zion Valley site and the
                                town office
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            setTimeout(() => {
                document.getElementById('zoomInOut').classList.add('zoom-in-out');
            }, 1000);
        });
        </script>
</x-base-layout>