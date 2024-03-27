<footer class="page-footer">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5 style="color: greenyellow">Company</h5>
                <ul class="footer-menu">
                    <li><a href="{{ route('community') }}">Community</a></li>
                    <li><a href="/team"> Team</a></li>
                    <li><a href="/projects">Projects</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#downloadsModal">
                    FAQ
                </button>
                <div class="modal fade" id="downloadsModal" tabindex="-1" role="dialog"
                    aria-labelledby="downloadsModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="downloadsModalLabel" style="color:greenyellow"> Frequently Asked Questions
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Question 1
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p style="color:green">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Question 2
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p style="color:green">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Question 3
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p style="color:green">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="questionTextarea">Ask a Question:</label>
                                    <textarea class="form-control" id="questionTextarea" rows="3"
                                        placeholder="Type your question here..."></textarea> <br>
                                        <button type="button" class="btn btn-primary" onclick="sendQuestion()">Send Question</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <ul class="footer-menu">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Office Documents
                    </button>

                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle" style="color:greenyellow">All you
                                        need to Know</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#termsModal"
                                                style="color:greenyellow">Terms &
                                                Conditions</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#advertiseModal"
                                                style="color:greenyellow">Advertise</a>
                                        </li>
                                        <li><a href="#" data-toggle="modal" data-target="#constitutionModal"
                                                style="color:greenyellow">Constitution</a></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Modals -->

                    <!-- Terms & Conditions Modal -->
                    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog"
                        aria-labelledby="termsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="termsModalLabel" style="color:greenyellow">Terms &
                                        Conditions</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <a href="../downloads/conservancy.pdf" target="_blank" class="btn btn-primary">Open
                                        PDF</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advertise Modal -->
                    <div class="modal fade" id="advertiseModal" tabindex="-1" role="dialog"
                        aria-labelledby="advertiseModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="advertiseModalLabel" style="color:greenyellow">Advertise
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <a href="../downloads/conservancy.pdf" target="_blank" class="btn btn-primary">Open
                                        PDF</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        style="color:greenyellow">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Constitution Modal -->
                    <div class="modal fade" id="constitutionModal" tabindex="-1" role="dialog"
                        aria-labelledby="constitutionModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="constitutionModalLabel" style="color:greenyellow">
                                        Constitution</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <a href="../downloads/conservancy.pdf" target="_blank" class="btn btn-primary">Open
                                        PDF</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5 style="color: greenyellow">Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">Zionvalley Architects</a></li>
                    <li><a href="#">Wigitech web</a></li>
                    <li><a href="#">Globalgreen Plant Center</a></li>

                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5 style="color: greenyellow">Contact</h5>
                <p class="footer-link mt-2">Zion Valley CBO No 19 Gatemu Building, Kenyatta road, Nyeri Town - Opposite
                    Toyota</p>
                <a href="#" class="footer-link">+254 792 668219</a>
                <a href="#" class="footer-link">zionvalleykenya@gmail.com</a>

                <h5 class="mt-3" style="color: greenyellow">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                </div>
            </div>
        </div>

        <hr>

        <p id="copyright" class="text-center">Copyright &copy; 2023 <a href="#" target="_blank">zionvalley</a>. All
            right reserved</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</footer>