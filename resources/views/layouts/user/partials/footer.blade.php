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
                    Downloads
                </button>
                <div class="modal fade" id="downloadsModal" tabindex="-1" role="dialog"
                    aria-labelledby="downloadsModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="downloadsModalLabel">Download PDF</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Terms & Conditions</h6>
                                <a href="path_to_downloadable_file.pdf" download class="btn btn-primary">Download
                                    PDF</a>
                                <hr>
                                <h6>The constitution</h6>
                                <a href="path_to_downloadable_file.docx" download class="btn btn-primary">Download
                                    DOCX</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="footer-menu">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Read From Here
                    </button>

                    <!-- Main Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">All you need</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#termsModal">Terms &
                                                Conditions</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#advertiseModal">Advertise</a>
                                        </li>
                                        <li><a href="#" data-toggle="modal"
                                                data-target="#constitutionModal">Constitution</a></li>
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
                                    <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
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
                                    <h5 class="modal-title" id="advertiseModalLabel">Advertise</h5>
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                    <h5 class="modal-title" id="constitutionModalLabel">Constitution</h5>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae enim
                                        voluptatem doloremque, expedita voluptates facilis odit eaque cumque maiores?
                                    </p>
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