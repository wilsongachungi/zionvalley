@section('css')
    <style>
        @media screen and (max-width:770px) {
            .below-team img {
                height: 100%;
            }
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
    <h5 class="welcome-text">Team</h5>
    <section class="my-4">
        <h4 class="text-center mb-3">Our Team</h3>
            <div class="team-row">
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/chairman.jpeg" alt="">
                        <div class="user-info site-color text-center">Chairman</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        Presiding over CBO meetings and working for the interests of the Zion Valley project,
                        its land supporters, the Harambee owners and the local community.
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/secretary.jpeg" alt="">
                        <div class="user-info site-color text-center">Secretary</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        Administrative tasks in relation to the CBO and to ensure that all CBO meetings and minutes are
                        well documented and recorde
                    </p>
                    <p class="px-2 line-height-1-5 text-center">
                        Contact: +254 723 007 512
                        <br>
                        Email: info@ZionValleyCBO.org
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/treasurer-removebg-preview (1).png" alt="">
                        <div class="user-info site-color text-center">Treasurer</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        To perform the financial duties of the CBO in concert with the Accounts Executive to ensure
                        correct
                        record keeping and reporting.
                    </p>
                </div>
                <img class="below-team" style="width: 100%; height:30%; " src="../assets/img/unnamed.png"
                    alt="">
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/19 slope.jpg" alt="">
                        <div class="user-info site-color text-center">Chief Executive</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        The office to create and steward the rules regulations, procedures, HR matters and internal
                        relationships between the arms of Zion Valley and the CBO
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/daidai.jpg" alt="">
                        <div class="user-info site-color text-center">Chief Architect</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        A member of the Executive office to provide the economic and strategic planning. The direction
                        and
                        designs of the Zion Valley project <br>
                        <a href="{{ route('architect') }}">Architect CV</a> <br>
                        <a href="https://tmsthermalstore.com/" target="__blank">Uk website</a>
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/ras.png" alt="">
                        <div class="user-info site-color text-center">Accounts Executive</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        A member of the Executive office and sitting alongside the Treasurer and all departments.
                        The Chief Anti Corruption Officer to ensure transparency and accountability to the total
                        Harambee
                        membership.
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/19 slope.jpg" alt="">
                        <div class="user-info site-color text-center">Harambee Advocate</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        A member of the Executive office to ensure representation from and reporting to all Harambee
                        owners
                        including Online Certificate Holders
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/vice chair.jpeg" alt="">
                        <div class="user-info site-color text-center">Implementors</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        Head supervisor of the team tasked to carry out practical and physical construction projects as
                        overseen by the Architects and CBO representative. This team to include the Social and community
                        support groups
                    </p>
                </div>
                <div class="team-col">
                    <div class="user d-flex flex-column col">
                        <img src="../assets/img/wilsondev.png" alt="wilson">
                        <div class="user-info site-color text-center">IT Developments</div>
                    </div>
                    <p class="px-2 line-height-1-5 text-center">
                        A member of the Executive office providing seamless integration and information transfer between
                        the various subgroups, to the customer and the Harambee membership
                    </p>
                </div>
            </div>
			<h4 class="text-center mb-3">Affiliates</h3>
				<div class="team-row">
					<div class="team-col">
						<div class="user d-flex flex-column col">
							<img src="{{ asset('assets/img/gregorymaina.png') }}"
							alt="">
							<div class="user-info site-color text-center"> Gregory Maina </div>
						<p class="px-2 line-height-1-5 text-center">
							Indigenous tree and bio diversity partnered expert.
							Laikipia environment and bio diversity conservation CBO
						</p>
					</div>
					<div class="team-col">
						<div class="user d-flex flex-column col">
							<img src="{{ asset('assets/img/globalgreen.jpg') }}" alt="GlobalGreen">
							<div class="user-info site-color text-center">GlobalGreen Plant Center</div>
						</div>
						<p class="px-2 line-height-1-5 text-center">
							GlobalGreen Plant Center offers flowers and indigenous plants, promoting sustainability and
							biodiversity. It’s a hub for eco-conscious gardeners and nature lovers seeking native greenery
							and expert plant care guidance.
						</p>
					</div>
					<div class="team-col">
						<div class="user d-flex flex-column col">
							<img src="" alt="">
							<div class="user-info site-color text-center">Techsphere Systems solution</div>
						</div>
						<p class="px-2 line-height-1-5 text-center">
							Techsphere System Solution offers expert system development and website design services,
							providing customized digital solutions to enhance business efficiency, online presence, and
							growth in today’s dynamic and tech-driven environment.<br>
							<a href="https://techspheresystemssolution.co.ke/" target="__blank">Techshere Systems</a>
						</p>
					</div>
    </section>

</x-base-layout>
