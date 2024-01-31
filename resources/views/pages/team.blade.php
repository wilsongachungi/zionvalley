@section('css')
    <style>
        @media screen and (max-width:770px) {
            .below-team img {
                height: 100%;
            }
        }
    </style>
@endsection
<x-base-layout>
    <section class="my-4">
        <h3 class="text-center mb-3">Our Team</h3>
        <div class="team-row">
            <div class="team-col row">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/chairman.jpeg" alt="">
                    <div class="user-info site-color">Chairman</div>
                </div>
                <p class="px-2 line-height-1-5">
                    Presiding over CBO meetings and working for the interests of the Zion Valley project,
                    its land supporters, the Harambee owners and the local community.
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/secretary.jpeg" alt="">
                    <div class="user-info site-color">Secretary</div>
                </div>
                <p class="px-2 line-height-1-5">
                    Administrative tasks in relation to the CBO and to ensure that all CBO meetings and minutes are
                    well documented and recorde
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/treasurer-removebg-preview (1).png" alt="">
                    <div class="user-info site-color">Treasurer</div>
                </div>
                <p class="px-2 line-height-1-5">
                    To perform the financial duties of the CBO in concert with the Accounts Executive to ensure correct
                    record keeping and reporting.
                </p>
            </div>
            <img class="below-team" style="width: 100%; height:30%; " src="../assets/img/unnamed.png" alt="">
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/cex.jpg" alt="">
                    <div class="user-info site-color">Chief Executive</div>
                </div>
                <p class="px-2 line-height-1-5">
                    The office to create and steward the rules regulations, procedures, HR matters and internal
                    relationships between the arms of Zion Valley and the CBO
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/daidai.jpg" alt="">
                    <div class="user-info site-color">Chief Architect</div>
                </div>
                <p class="px-2 line-height-1-5">
                    A member of the Executive office to provide the economic and strategic planning. The direction and
                    designs of the Zion Valley project
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/ras.png" alt="">
                    <div class="user-info site-color">Accounts Executive</div>
                </div>
                <p class="px-2 line-height-1-5">
                    A member of the Executive office and sitting alongside the Treasurer and all departments.
                    The Chief Anti Corruption Officer to ensure transparency and accountability to the total Harambee
                    membership.
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/19 slope.jpg" alt="">
                    <div class="user-info site-color">Harambee Advocate</div>
                </div>
                <p class="px-2 line-height-1-5">
                    A member of the Executive office to ensure representation from and reporting to all Harambee owners
                    including Online Certificate Holders
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/vice chair.jpeg" alt="">
                    <div class="user-info site-color">Implementors</div>
                </div>
                <p class="px-2 line-height-1-5">
                    Head supervisor of the team tasked to carry out practical and physical construction projects as
                    overseen by the Architects and CBO representative. This team to include the Social and community
                    support groups
                </p>
            </div>
            <div class="team-col">
                <div class="user d-flex flex-column col">
                    <img src="../assets/img/wilson.jpg" alt="">
                    <div class="user-info site-color">IT Developments</div>
                </div>
                <p class="px-2 line-height-1-5">
                    A member of the Executive office providing seamless integration and information transfer between
                    the various subgroups, to the customer and the Harambee membership
                </p>
            </div>
        </div>
    </section>
</x-base-layout>
